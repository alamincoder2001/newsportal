<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view("admin.category.index");
    }

    public function fetch()
    {
        return Category::get();
    }

    public function store(Request $request)
    {
        try {
            if (!empty($request->id)) {
                $validator = Validator::make($request->all(), [
                    "name" => "required|unique:categories,name," . $request->id
                ]);
                $data             = Category::find($request->id);
                $old              = $data->image;
                $data->updated_at = Carbon::now();
            } else {
                $validator = Validator::make($request->all(), [
                    "name" => "required|unique:categories"
                ]);
                $data             = new Category();
                $data->created_at = Carbon::now();
            }

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            $data->name    = $request->name;
            $data->is_menu = $request->is_menu;
            $data->slug    = $this->make_slug($request->name);
            // $data->slug    = Str::slug($request->name);
            
            if ($request->hasFile("image")) {
                if (isset($old) && $old != "") {
                    if (File::exists($old)) {
                        File::delete($old);
                    }
                }
                $data->image = $this->imageUpload($request, 'image', 'uploads/categories') ?? '';
            }
            $data->save();

            if (!empty($request->id)) {
                return "Category updated successfully";
            } else {
                return "Category insert successfully";
            }
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }

    public function destroy(Request $request)
    {
        try{
            $data = Category::find($request->id);
            $old = $data->image;
            if (File::exists($old)) {
                File::delete($old);
            }
            $data->delete();
            return "Category delete successfully";
        }catch(\Throwable $e){
            return "Opps! something went wrong";
        }
    }
}
