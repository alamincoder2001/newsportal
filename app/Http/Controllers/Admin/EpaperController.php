<?php

namespace App\Http\Controllers\Admin;

use App\Models\Epaper;
use App\Models\AdminAccess;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class EpaperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return Epaper::latest()->get();
    }

    public function create()
    {
        $access = AdminAccess::where('admin_id', Auth::guard('admin')->user()->id)
            ->pluck('permissions')
            ->toArray();
        if (!in_array("epaperEntry", $access)) {
            return view("admin.unauthorize");
        }
        return view("admin.epaper.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'publish_date' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ]);
        }

        try {
            $data = new Epaper();
            $data->publish_date = $request->publish_date;
            $data->link         = $request->link;
            $data->image        = $this->imageUpload($request, 'image', 'uploads/epaper');
            $data->save();

            return response()->json([
                'status'  => true,
                'message' => 'Yea! Epaper Upload Successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'link'         => 'required',
            'publish_date' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ]);
        }

        try {
            $epaper = Epaper::find($request->id);

            $epaper->link         = $request->link;
            $epaper->publish_date = $request->publish_date;
            if ($request->hasFile('image')) {
                if (File::exists($epaper->image)) {
                    File::delete($epaper->image);
                }
                $epaper->image        = $this->imageUpload($request, 'image', 'uploads/epaper');
            }
            $epaper->update();

            return response()->json([
                'status'  => true,
                'message' => 'Yea! A Epaper Updated Successfully'
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
        Epaper::find($request->id)->delete();
        return "Epaper delete successfully";
    }
}
