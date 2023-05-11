<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminAccess;
use Illuminate\Http\Request;
use App\Models\AdvertiseFive;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class AdvertiseFiveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return AdvertiseFive::first();
    }

    public function create()
    {
        $access = AdminAccess::where('admin_id', Auth::guard('admin')->user()->id)
            ->pluck('permissions')
            ->toArray();
        if (!in_array("advertiseFive", $access)) {
            return view("admin.unauthorize");
        }
        return view("admin.advertise.advertise_five");
    }

    public function store(Request $request)
    {
        try {

            $data         = AdvertiseFive::first();
            $data->title  = $request->title;
            $data->url    = $request->url;
            $data->status = $request->status;
            if ($request->hasFile('image')) {
                $extension = $request->file('image')->extension();
                $name = '600x300.' . $extension;
                $img = Image::make($request->file('image'))->resize(600, 300);
                $img->save(public_path('uploads/advertise-five/' . $name));
                $data->image = "uploads/advertise-five/" . $name;
            }

            $data->save();

            return "Yea! Update Advertise Successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
