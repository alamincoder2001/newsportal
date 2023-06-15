<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\CategorywiseAdds;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class CategorywiseAddController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return CategorywiseAdds::with('category')->latest()->get();
    }

    public function create()
    {
        return view("admin.categorywiseadds.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required',
            'category_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ]);
        }

        try {
            // $uniqueId = $this->generateCode("CategorywiseAdds", "Ad");

            // if ($request->hasFile('image')) {
            //     $extension = $request->file('image')->extension();
            //     $name = $uniqueId . '.' . $extension;
            // } else {
            //     $name = null;
            // }

            CategorywiseAdds::create([
                'title'       => $request->title,
                'url'         => $request->url,
                'category_id' => $request->category_id,
                // 'image'        => $name == null ? null : '/uploads/categorywiseadds/' . $name,
                'image'        => $this->imageUpload($request, 'image', 'uploads/categorywiseadds/'),
            ]);

            // if ($request->hasFile('image')) {
            //     $img = Image::make($request->file('image'))->resize(350, 480);
            //     $img->save(public_path('uploads/categorywiseadds/' . $name));
            // }

            return response()->json([
                'status'  => true,
                'message' => 'Yea! A Adds Upload Successfully'
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status'  => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required',
            'category_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ]);
        }

        try {
            // $uniqueId = $this->generateCode("CategorywiseAdds", "EP");
            $categorywiseadd = CategorywiseAdds::find($request->id);
            // if ($request->hasFile('image')) {
            //     if (file_exists(public_path($categorywiseadd->image)) && $categorywiseadd->image != null) {
            //         unlink(public_path($categorywiseadd->image));
            //     }
            //     $extension = $request->file('image')->extension();
            //     $name = $uniqueId . '.' . $extension;
            // } else if ($categorywiseadd->image != null) {
            //     $last = explode('/', $categorywiseadd->image);
            //     $name = end($last);
            // } else {
            //     $name = null;
            // }

            $categorywiseadd->title       = $request->title;
            $categorywiseadd->url         = $request->url;
            $categorywiseadd->category_id = $request->category_id;
            // $categorywiseadd->image       = $name == null ? null : '/uploads/categorywiseadds/' . $name;
            $categorywiseadd->image       = $this->imageUpload($request, 'image', 'uploads/categorywiseadds');
            $categorywiseadd->update();

            // if ($request->hasFile('image')) {
            //     $img = Image::make($request->file('image'))->resize(350, 480);
            //     $img->save(public_path('uploads/categorywiseadds/' . $name));
            // }

            return response()->json([
                'status'  => true,
                'message' => 'Yea! A Adds Updated Successfully'
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status'  => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function destroy(Request $request)
    {
        CategorywiseAdds::find($request->id)->delete();
        return "Adds delete successfully";
    }
}
