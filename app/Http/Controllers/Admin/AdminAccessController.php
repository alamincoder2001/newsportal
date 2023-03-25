<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Permission;
use App\Models\AdminAccess;
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

    // permission edit
    public function permissionEdit($id)
    {
        $user = Admin::find($id);
        $userAccess = AdminAccess::where('admin_id', $id)->pluck('permissions')->toArray();
        $group_name = Permission::pluck('group_name')->unique();
        $permissions = Permission::all();
        return view('admin.user.access', compact('user', 'userAccess', 'group_name', 'permissions'));
    }

    public function permissionStore(Request $request)
    {
        try {
            AdminAccess::where('admin_id', $request->admin_id)->delete();
            $permissions = Permission::all();

            foreach ($permissions as $value) {
                if (in_array($value->id, $request->permissions)) {
                    AdminAccess::create([
                        'admin_id'    => $request->admin_id,
                        'group_name'  => $value->group_name,
                        'permissions' => $value->permissions,
                    ]);
                }
            }
            return redirect()->route('admin.user.index')->with('success', 'Permissions added successfullly');
        } catch (\Throwable $e) {
            return redirect()->route('admin.user.index');
        }
    }
}
