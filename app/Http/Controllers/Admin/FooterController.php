<?php

namespace App\Http\Controllers\Admin;

use App\Models\FooterPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return FooterPage::latest()->get();
    }

    public function create()
    {
        return view("admin.footerpages.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ]);
        }

        try {
            FooterPage::create([
                'title'       => $request->title,
                'slug'        => $this->make_slug($request->title),
                'description' => $request->description,
            ]);
            return response()->json([
                'status'  => true,
                'message' => 'Yea! A Footer page create Successfully'
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
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ]);
        }

        try {
            $footerpage = FooterPage::find($request->id);

            $footerpage->title       = $request->title;
            $footerpage->slug        = $this->make_slug($request->title);
            $footerpage->description = $request->description;
            $footerpage->update();

            return response()->json([
                'status'  => true,
                'message' => 'Yea! Footer Page Updated Successfully'
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
        FooterPage::find($request->id)->delete();
        return "Footer Page delete successfully";
    }
}
