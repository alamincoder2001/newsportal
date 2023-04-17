<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdvertiseOne;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AdvertiseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return AdvertiseOne::first();
    }

    public function create()
    {
        return view("admin.advertise.advertise_one");
    }

    public function store(Request $request)
    {
        try {
            $uniqueId = date('Y') . '000001';

            $data        = AdvertiseOne::first();
            $data->title = $request->title;
            $data->url   = $request->url;
            if ($request->hasFile('image')) {
                $extension = $request->file('image')->extension();
                $name = $uniqueId . '.' . $extension;
                $img = Image::make($request->file('image'))->resize(400, 250);
                $img->save(public_path('uploads/advertise-one/' . $name));
                $data->image = "uploads/advertise-one/" . $name;
            }

            $data->save();

            return "Yea! Update Advertise Successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
