<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Setting;
use App\Models\AdminAccess;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
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
        return redirect("/admin");
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
            $data->name     = $request->name;
            $data->username = $request->username;
            $data->email    = $request->email;
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
                "image" => "mimes:jpg,png,jpeg"
            ], ["image.dimensions" => "Image dimension must be (200 x 200)"]);

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }
            $data = Admin::find($admin->id);
            $old = $data->image;

            if (!empty($old) && isset($old)) {
                if (file_exists(public_path($old)) && $old != null) {
                    unlink(public_path($old));
                }
            }
            if ($request->has('image')) {
                $extension = $request->file('image')->extension();
                $name = $data->username . '.' . $extension;
                $img = Image::make($request->file('image'))->resize(150, 150);
                $img->save(public_path('uploads/admins/' . $name));
                $data->image = isset($name) ? '/uploads/admins/' . $name : null;
            }

            $data->save();
            return "Image Upload successfully";
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }

    //settings method
    public function setting()
    {
        $access = AdminAccess::where('admin_id', Auth::guard('admin')->user()->id)
            ->pluck('permissions')
            ->toArray();
        if (!in_array("settingUpdate", $access)) {
            return view("admin.unauthorize");
        }
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

            $data                       = Setting::first();
            $data->company_name         = $request->company_name;
            $data->company_name_english = $request->company_name_english;
            $data->title                = $request->title;
            $data->email                = $request->email;
            $data->address              = $request->address;
            $data->phone                = $request->phone;
            $data->advertise_phone      = $request->advertise_phone;
            $data->editor_phone         = $request->editor_phone;
            $data->video_link1          = $request->video_link1;
            $data->video_link2          = $request->video_link2;
            $data->facebook             = $request->facebook;
            $data->instagram            = $request->instagram;
            $data->twitter              = $request->twitter;
            $data->linkedin             = $request->linkedin;
            $data->youtube              = $request->youtube;
            $data->footercategory       = implode(",", $request->footercategory);
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
