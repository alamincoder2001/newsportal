<?php

namespace App\Http\Controllers\Admin;

use App\Models\Epaper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view("admin.epaper.create");
    }

    public function store(Request $request)
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
            $uniqueId = $this->generateCode("Epaper", "EP");

            if ($request->hasFile('image')) {
                $extension = $request->file('image')->extension();
                $name = $uniqueId . '.' . $extension;
            } else {
                $name = null;
            }

            Epaper::create([
                'publish_date' => $request->publish_date,
                'link'         => $request->link,
                'image'        => $name == null ? null : '/uploads/epaper/' . $name,
            ]);

            if ($request->hasFile('image')) {
                $img = Image::make($request->file('image'))->resize(300, 450);
                $img->save(public_path('uploads/epaper/' . $name));
            }

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

    public function update()
    {
        
    }

    public function destroy(Request $request)
    {
        Epaper::find($request->id)->delete();
        return "Epaper delete successfully";
    }
}
