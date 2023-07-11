<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\CategorywiseAdds;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
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
            CategorywiseAdds::create([
                'title'       => $request->title,
                'url'         => $request->url,
                'category_id' => $request->category_id,
                'image'        => $this->imageUpload($request, 'image', 'uploads/categorywiseadds/'),
            ]);
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
            $categorywiseadd = CategorywiseAdds::find($request->id);

            $categorywiseadd->title       = $request->title;
            $categorywiseadd->url         = $request->url;
            $categorywiseadd->category_id = $request->category_id;
            if ($request->hasFile('image')) {
                if (File::exists($categorywiseadd->image)) {
                    File::delete($categorywiseadd->image);
                }
                $categorywiseadd->image       = $this->imageUpload($request, 'image', 'uploads/categorywiseadds');
            }
            $categorywiseadd->update();

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
