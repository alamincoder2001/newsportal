<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view("admin.news.index");
    }

    public function fetch()
    {
        return DB::select("SELECT 
                    n.*, 
                    u.name AS admin_name,
                    c.name AS category_name, 
                    sc.name AS subcategory_name
                    FROM news n
                    LEFT JOIN admins u ON u.id = n.user_id
                    LEFT JOIN categories c ON c.id = n.category_id
                    LEFT JOIN subcategories sc ON sc.id = n.subcategory_id
                    WHERE n.status = 'a'");
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "title" => "required"
            ]);
            if (!empty($request->id)) {
                $data             = News::find($request->id);
                $old              = $data->image;
                $oldtwo              = $data->thumbnail;
                $data->updated_at = Carbon::now();
            } else {
                $data             = new News();
                $data->created_at = Carbon::now();
            }

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            $data->title          = $request->title;
            $data->slug           = $this->make_slug($request->title);
            $data->description    = $request->description;
            $data->category_id    = $request->category_id;
            $data->subcategory_id = $request->subcategory_id;
            $data->user_id        = Auth::guard('admin')->user()->id;
            if ($request->hasFile("image")) {
                if (isset($old) && $old != "") {
                    if (File::exists($old)) {
                        File::delete($old);
                    }
                    if (File::exists($oldtwo)) {
                        File::delete($oldtwo);
                    }
                }

                //for thumbnail
                $img = $request->file('image');
                $filename = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME) . '_' . uniqId() . '.' . $img->getClientOriginalExtension();
                Image::make($img)->resize(420, 282)->save(public_path('uploads/thumbnail/' . $filename));
                $data->thumbnail = "uploads/thumbnail/" . $filename;

                //for main image
                $data->image = $this->imageUpload($request, 'image', 'uploads/news') ?? '';
                
            }

            $data->save();

            if (!empty($request->id)) {
                return "News updated successfully";
            } else {
                return "News insert successfully";
            }
        } catch (\Throwable $e) {
            return "Something went wrong" . $e->getMessage();
        }
    }

    public function destroy(Request $request)
    {
        try {
            $data = News::find($request->id);
            // $old = $data->image;
            // if (File::exists($old)) {
            //     File::delete($old);
            // }
            // $data->delete();
            $data->status = "d";
            $data->save();
            return "News delete successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
