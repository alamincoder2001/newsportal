<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view("admin.dashboard");
    }

    public function AdminLogout()
    {
        Auth::guard("admin")->logout();
        return redirect("/");
    }

    // admin profile updated
    public function profileIndex()
    {
        $data = Auth::guard('admin')->user();
        return view("admin.profile", compact('data'));
    }

    public function profileUpdate(Request $request)
    {
        try {
            $admin = Auth::guard('admin')->user();
            if (!empty($request->old_password) || !empty($request->new_password) || !empty($request->confrim_password)) {
                $validator = Validator::make($request->all(), [
                    "name"             => "required",
                    "username"         => "required|unique:admins,username," . $admin->id,
                    "email"            => "required|unique:admins,email," . $admin->id,
                    "old_password"     => "required",
                    "new_password"     => "required",
                    'confirm_password' => 'required_with:new_password|same:new_password'
                ]);
            } else {
                $validator = Validator::make($request->all(), [
                    "name"     => "required",
                    "username" => "required|unique:admins,username," . $admin->id,
                    "email"    => "required|unique:admins,email," . $admin->id,
                ]);
            }

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            $data = Admin::find($admin->id);
            if (!empty($request->old_password) || !empty($request->new_password) || !empty($request->confrim_password)) {
                if (Hash::check($request->old_password, $admin->password)) {
                    $data->password = Hash::make($request->new_password);
                } else {
                    return response()->json(["errors" => "Old password does not match"]);
                }
            }
            $data->name = $request->name;
            $data->username = $request->username;
            $data->email = $request->email;
            $data->save();
            return "Admin Profile Updated";
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }

    public function imageUpdate(Request $request)
    {
        try {

            $admin = Auth::guard('admin')->user();

            $validator = Validator::make($request->all(), [
                // "image" => "mimes:jpg,png,jpeg|dimensions:width=200,height=200"
                "image" => "mimes:jpg,png,jpeg"
            ], ["image.dimensions" => "Image dimension must be (200 x 200)"]);

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }
            $data = Admin::find($admin->id);
            $old = $data->image;

            if (!empty($old) && isset($old)) {
                if (File::exists($old)) {
                    File::delete($old);
                }
            }
            $data->image = $this->imageUpload($request, 'image', 'uploads/admins') ?? '';

            $data->save();
            return "Image Upload successfully";
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }

    //settings method
    public function setting()
    {
        return view("admin.settings");
    }

    public function fetchSetting()
    {
        return Setting::first();
    }

    public function storeSetting(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "company_name" => "required",
                "title"        => "required",
                "phone"        => "required",
            ]);

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            $data               = Setting::first();
            $data->company_name = $request->company_name;
            $data->title        = $request->title;
            $data->address      = $request->address;
            $data->phone        = $request->phone;
            $data->facebook     = $request->facebook;
            $data->instagram    = $request->instagram;
            $data->twitter      = $request->twitter;
            $data->linkedin     = $request->linkedin;
            $data->youtube      = $request->youtube;
            if ($request->hasFile("logo")) {
                if (isset($old) && $old != "") {
                    if (File::exists($old)) {
                        File::delete($old);
                    }
                }
                $data->logo = $this->imageUpload($request, 'logo', 'uploads/settings') ?? '';
            }
            if ($request->hasFile("favicon")) {
                if (isset($old) && $old != "") {
                    if (File::exists($old)) {
                        File::delete($old);
                    }
                }
                $data->favicon = $this->imageUpload($request, 'favicon', 'uploads/settings') ?? '';
            }
            $data->save();
            return "Setting updated successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
