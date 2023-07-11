<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminAccess;
use Illuminate\Http\Request;
use App\Models\AdvertiseFour;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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
        $access = AdminAccess::where('admin_id', Auth::guard('admin')->user()->id)
            ->pluck('permissions')
            ->toArray();
        if (!in_array("advertiseFour", $access)) {
            return view("admin.unauthorize");
        }
        return view("admin.advertise.advertise_four");
    }

    public function store(Request $request)
    {
        try {
            $data         = AdvertiseFour::first();
            $data->title  = $request->title;
            $data->url    = $request->url;
            $data->status = $request->status;
            if ($request->hasFile('image')) {
                if (File::exists($data->image)) {
                    File::delete($data->image);
                }
                $data->image = $this->imageUpload($request, 'image', 'uploads/advertise-four');
            }

            $data->save();

            return "Yea! Update Advertise Successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
