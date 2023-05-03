<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdvertiseTwo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AdvertiseTwoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return AdvertiseTwo::first();
    }

    public function create()
    {
        return view("admin.advertise.advertise_two");
    }

    public function store(Request $request)
    {
        try {

            $data         = AdvertiseTwo::first();
            $data->title  = $request->title;
            $data->url    = $request->url;
            $data->status = $request->status;
            if ($request->hasFile('image')) {
                $extension = $request->file('image')->extension();
                $name = '1200x300.' . $extension;
                $img = Image::make($request->file('image'))->resize(1200, 300);
                $img->save(public_path('uploads/advertise-two/' . $name));
                $data->image = "uploads/advertise-two/" . $name;
            }

            $data->save();

            return "Yea! Update Advertise Successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
