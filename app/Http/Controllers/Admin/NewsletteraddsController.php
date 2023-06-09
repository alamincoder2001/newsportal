<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminAccess;
use Illuminate\Http\Request;
use App\Models\NewsletterAdd;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class NewsletteraddsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return NewsletterAdd::first();
    }

    public function create()
    {
        $access = AdminAccess::where('admin_id', Auth::guard('admin')->user()->id)
            ->pluck('permissions')
            ->toArray();
        if (!in_array("settingUpdate", $access)) {
            return view("admin.unauthorize");
        }
        return view("admin.advertise.newsletteradds");
    }

    public function store(Request $request)
    {
        try {

            $data         = NewsletterAdd::first();
            $data->status = $request->status;
            if ($request->hasFile('image')) {
                $extension = $request->file('image')->extension();
                $name = '600x300.' . $extension;
                $img = Image::make($request->file('image'))->resize(600, 300);
                $img->save(public_path('uploads/newsletteradds/' . $name));
                $data->image = "uploads/newsletteradds/" . $name;
            }

            $data->save();

            return "Yea! Update Newsletteradds Successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong". $e->getMessage();
        }
    }
}