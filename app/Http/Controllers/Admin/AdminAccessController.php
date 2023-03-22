<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminAccessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view("admin.user.index");
    }

    public function fetch($id = null)
    {
        if ($id == null) {
            $data = Admin::where("id", "!=", 1)->get();
        } else {
            $data = Admin::find($id);
        }
        return response()->json(["data" => $data]);
    }

    public function store(Request $request)
    {
        try {
            if (empty($request->admin_id)) {
                $validator = Validator::make($request->all(), [
                    "name"  => "required",
                    "username"  => "required|unique:admins",
                    "email" => "required",
                    "role" => "required",
                    "password" => "required"
                ]);
                $data = new Admin();
            } else {
                $validator = Validator::make($request->all(), [
                    "username"  => "required|unique:admins,username," . $request->admin_id,
                    "email" => "required|unique:admins,email," . $request->admin_id,
                    "name"  => "required",
                    "email" => "required",
                    "role" => "required",
                ]);
                $data = Admin::find($request->admin_id);
            }
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()]);
            }
            $data->name = $request->name;
            $data->username = $request->username;
            $data->email = $request->email;
            $data->role = $request->role;
            if (!empty($request->password)) {
                $data->password = Hash::make($request->password);
            }
            $data->save();
            if (empty($request->admin_id)) {
                return "User created successfull";
            } else {
                return "User updated successfull";
            }
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
