<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view("admin.subcategory.index");
    }

    public function fetch()
    {
        $data = DB::select("SELECT 
                    sc.*,
                    c.name as category_name
                FROM subcategories sc
                LEFT JOIN categories c on c.id = sc.category_id");
        return $data;
    }

    public function store(Request $request)
    {
        try {
            if (!empty($request->id)) {
                $validator = Validator::make($request->all(), [
                    "name" => "required|unique:subcategories,name," . $request->id
                ]);
                $data             = Subcategory::find($request->id);
                $old              = $data->image;
                $data->updated_at = Carbon::now();
            } else {
                $validator = Validator::make($request->all(), [
                    "name" => "required|unique:subcategories"
                ]);
                $data             = new Subcategory();
                $data->created_at = Carbon::now();
            }

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            $data->name        = $request->name;
            $data->category_id = $request->category_id;
            $data->slug        = $this->make_slug($request->name);
            if ($request->hasFile("image")) {
                if (isset($old) && $old != "") {
                    if (File::exists($old)) {
                        File::delete($old);
                    }
                }
                $data->image = $this->imageUpload($request, 'image', 'uploads/subcategories') ?? '';
            }
            $data->save();

            if (!empty($request->id)) {
                return "Subcategory updated successfully";
            } else {
                return "Subcategory insert successfully";
            }
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }

    public function destroy(Request $request)
    {
        try {
            $data = Subcategory::find($request->id);
            $old = $data->image;
            if (File::exists($old)) {
                File::delete($old);
            }
            $data->delete();
            return "Subcategory delete successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
