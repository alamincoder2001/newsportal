<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminAccess;
use App\Models\AdvertiseTwo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
        $access = AdminAccess::where('admin_id', Auth::guard('admin')->user()->id)
            ->pluck('permissions')
            ->toArray();
        if (!in_array("advertiseTwo", $access)) {
            return view("admin.unauthorize");
        }
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
                $name = '1200x130.' . $extension;
                $img = Image::make($request->file('image'))->resize(1200, 130);
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
