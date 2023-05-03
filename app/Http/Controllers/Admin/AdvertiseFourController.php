<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AdvertiseFour;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AdvertiseFourController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return AdvertiseFour::first();
    }

    public function create()
    {
        return view("admin.advertise.advertise_four");
    }

    public function store(Request $request)
    {
        try {
            $uniqueId = date('Y') . '000001';

            $data         = AdvertiseFour::first();
            $data->title  = $request->title;
            $data->url    = $request->url;
            $data->status = $request->status;
            if ($request->hasFile('image')) {
                $extension = $request->file('image')->extension();
                $name = '600x1200.' . $extension;
                $img = Image::make($request->file('image'))->resize(600, 1200);
                $img->save(public_path('uploads/advertise-four/' . $name));
                $data->image = "uploads/advertise-four/" . $name;
            }

            $data->save();

            return "Yea! Update Advertise Successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
