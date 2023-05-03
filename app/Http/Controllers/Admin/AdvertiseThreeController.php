<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AdvertiseThree;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AdvertiseThreeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return AdvertiseThree::first();
    }

    public function create()
    {
        return view("admin.advertise.advertise_three");
    }

    public function store(Request $request)
    {
        try {

            $data         = AdvertiseThree::first();
            $data->title  = $request->title;
            $data->url    = $request->url;
            $data->status = $request->status;
            if ($request->hasFile('image')) {
                $extension = $request->file('image')->extension();
                $name = '600x600.' . $extension;
                $img = Image::make($request->file('image'))->resize(600, 600);
                $img->save(public_path('uploads/advertise-three/' . $name));
                $data->image = "uploads/advertise-three/" . $name;
            }

            $data->save();

            return "Yea! Update Advertise Successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
