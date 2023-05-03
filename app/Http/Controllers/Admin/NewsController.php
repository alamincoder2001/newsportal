<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewsPublished;
use Exception;
use Illuminate\Support\Facades\Auth;
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

    public function getNews($id = '')
    {
        if ($id != '') {
            $news = News::with('category')->where('id', $id)->first();
        } else {
            $news = News::with('category')->latest()->where('is_archive', 'no')->get();
        }

        return $news;

        // $clause = '';
        // if ($id != '') {
        //     $clause .= " and n.id = '$id' ";
        // }
        // return DB::select("SELECT
        //             n.*,
        //             u.name AS admin_name,
        //             c.name AS category_name,
        //             sc.name AS subcategory_name
        //             FROM news n
        //             LEFT JOIN admins u ON u.id = n.user_id
        //             LEFT JOIN categories c ON c.id = n.category_id
        //             LEFT JOIN subcategories sc ON sc.id = n.subcategory_id
        //             WHERE n.deleted_at is null
        //             $clause ");
    }

    public function create($id = '')
    {
        $id = $id;
        return view("admin.news.create", compact('id'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title'       => 'required|string|min:5|max:191',
            'categories'  => 'required|array|min:1',
            'description' => 'required|string',
            // 'masterImage' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ]);
        }

        try {
            $uniqueId = $this->getUniqueId();

            if ($request->hasFile('masterImage')) {
                $extension = $request->file('masterImage')->extension();
                $name = $uniqueId . '.' . $extension;
            } else {
                $name = null;
            }

            $news = News::create([
                'unique_id'    => $uniqueId,
                'title'        => $request->title,
                'subtitle'     => $request->subtitle,
                'slug'         => $this->make_slug($uniqueId . date('His')),
                'description'  => $request->description,
                'is_published' => Auth::guard('admin')->user()->role == 'admin' ? 'active' : 'pending',
                // 'subcategory_id' => $request->subcategory_id == '' ? 0 : $request->subcategory_id,
                'user_id'        => Auth::guard('admin')->user()->id,
                'image'          => $name == null ? null : '/uploads/news/' . $name,
                'thumbnail'      => $name == null ? null : '/uploads/thumbnail/' . $name,
            ]);

            foreach ($request->categories as $key => $category) {
                NewsPublished::create([
                    'news_id'     => $news->id,
                    'category_id' => $category
                ]);
            }


            // $user->syncRoles($request->user_role);
            if ($request->hasFile('masterImage')) {
                $img = Image::make($request->file('masterImage'))->resize(1000, 672);
                $img->save(public_path('uploads/news/' . $name));

                $img = Image::make($request->file('masterImage'))->resize(300, 202);
                $img->save(public_path('uploads/thumbnail/' . $name));
            }

            return response()->json([
                'status'  => true,
                'message' => 'Yea! A News Upload Successfully'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => $e->getMessage()
            ]);
        }

        // try {
        //     $validator = Validator::make($request->all(), [
        //         "title" => "required"
        //     ]);
        //     if (!empty($request->id)) {
        //         $data             = News::find($request->id);
        //         $old              = $data->image;
        //         $oldtwo              = $data->thumbnail;
        //         $data->updated_at = Carbon::now();
        //     } else {
        //         $data             = new News();
        //         $data->created_at = Carbon::now();
        //     }

        //     if ($validator->fails()) {
        //         return response()->json(["error" => $validator->errors()]);
        //     }

        //     $data->title          = $request->title;
        //     $data->slug           = $this->make_slug($request->title);
        //     $data->description    = $request->description;
        //     $data->category_id    = $request->category_id;
        //     $data->subcategory_id = $request->subcategory_id;
        //     $data->user_id        = Auth::guard('admin')->user()->id;
        //     if ($request->hasFile("image")) {
        //         if (isset($old) && $old != "") {
        //             if (File::exists($old)) {
        //                 File::delete($old);
        //             }
        //             if (File::exists($oldtwo)) {
        //                 File::delete($oldtwo);
        //             }
        //         }

        //         //for thumbnail
        //         $img = $request->file('image');
        //         $filename = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME) . '_' . uniqId() . '.' . $img->getClientOriginalExtension();
        //         Image::make($img)->resize(300, 201)->save(public_path('uploads/thumbnail/' . $filename));
        //         $data->thumbnail = "uploads/thumbnail/" . $filename;

        //         //for main image
        //         $data->image = $this->imageUpload($request, 'image', 'uploads/news') ?? '';
        //     }

        //     $data->save();

        //     if (!empty($request->id)) {
        //         return "News updated successfully";
        //     } else {
        //         return "News insert successfully";
        //     }
        // } catch (\Throwable $e) {
        //     return "Something went wrong" . $e->getMessage();
        // }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => ['required', 'string'],
            // 'category_id' => ['required'],
            'description' => ['required', 'string'],
            // 'masterImage' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ]);
        }

        try {
            $news = News::find($request->id);

            // $uniqueId = $this->getUniqueId();

            if ($request->hasFile('masterImage')) {
                if (file_exists(public_path($news->image)) && $news->image != null) {
                    unlink(public_path($news->image));
                }
                if (file_exists(public_path($news->thumbnail)) && $news->image != null) {
                    unlink(public_path($news->thumbnail));
                }
                // if (File::exists($news->image)) {
                //     File::delete($news->image);
                // }
                // if (File::exists($news->thumbnail)) {
                //     File::delete($news->thumbnail);
                // }
                $extension = $request->file('masterImage')->extension();
                $name = $news->unique_id . '.' . $extension;
            } else if ($news->image != null) {
                $last = explode('/', $news->image);
                $name = end($last);
            } else {
                $name = null;
            }

            $news->title        = $request->title;
            $news->subtitle     = $request->subtitle;
            $news->slug         = $this->make_slug($news->slug . date('His'));
            $news->description  = $request->description;
            $news->is_published = Auth::guard('admin')->user()->role == 'admin' ? 'active' : 'pending';
            $news->user_id      = Auth::guard('admin')->user()->id;
            $news->image        = $name == null ? null : '/uploads/news/' . $name;
            $news->thumbnail    = $name == null ? null : '/uploads/thumbnail/' . $name;
            $news->update();

            NewsPublished::where('news_id', $news->id)->delete();

            foreach ($request->categories as $key => $category) {
                NewsPublished::create([
                    'news_id'     => $news->id,
                    'category_id' => $category
                ]);
            }

            if ($request->hasFile('masterImage')) {
                $img = Image::make($request->file('masterImage'))->resize(1000, 672);
                $img->save(public_path('uploads/news/' . $name));

                $img = Image::make($request->file('masterImage'))->resize(300, 202);
                $img->save(public_path('uploads/thumbnail/' . $name));
            }

            return response()->json([
                'status'  => 'success',
                'message' => 'Yea! A News Updated Successfully',
                'is_archive' => $news->is_archive
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => $e->getMessage()
            ]);
        }
    }

    public function newsPending()
    {
        return view("admin.news.pending");
    }

    public function getPendingNews()
    {
        $news = News::where('is_published', 'pending')->with('category')->latest()->get();
        return $news;
    }

    public function newsArchive()
    {
        return view('admin.news.archive');
    }

    public function getArchiveNews()
    {
        $news = News::where('is_archive', 'yes')->with('category')->latest()->get();
        return $news;
    }

    public function approve(Request $request)
    {
        try {
            $data = News::find($request->id);

            $data->is_published = 'active';
            $data->update();

            return "News approved successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }

    public function archive(Request $request)
    {
        try {
            $data = News::find($request->id);

            $data->is_archive = 'yes';
            $data->update();

            return "News move to archive successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }

    public function newsUndo(Request $request)
    {
        try {
            $data = News::find($request->id);

            $data->is_archive = 'no';
            $data->update();

            return "News move to Normal successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }


    public function destroy(Request $request)
    {
        try {
            $data = News::find($request->id);
            // if (File::exists($data->image)) {
            //     File::delete($old);
            // }
            $data->delete();
            return "News delete successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
