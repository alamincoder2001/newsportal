<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Admin;
use App\Models\Permission;
use App\Models\AdminAccess;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class AdminAccessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        $access = AdminAccess::where('admin_id', Auth::guard('admin')->user()->id)
            ->pluck('permissions')
            ->toArray();
        if (!in_array("userEntry", $access)) {
            return view("admin.unauthorize");
        }
        return view("admin.user.create");
    }

    public function index($id = null)
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

        $validator = Validator::make($request->all(), [
            'name'      => 'required|string|min:3|max:30',
            'username' => 'required|string|min:3|max:20|unique:admins',
            'email'     => 'required|email:rfc,dns|unique:admins',
            'role'      => 'required|string',
            'image'     => 'nullable|mimes:jpeg,png,jpg,gif',
            'password'  => 'required|min:5|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ]);
        }

        try {
            if ($request->has('image')) {
                $extension = $request->file('image')->extension();
                $name = $request->username . '.' . $extension;
            }

            $news = Admin::create([
                'name'     => $request->name,
                'username' => $request->username,
                'email'    => $request->email,
                'role'     => $request->role,
                'password' => Hash::make($request->password),
                'image'    => isset($name) ? '/uploads/admins/' . $name : null,
            ]);

            if ($request->has('image')) {
                $img = Image::make($request->file('image'))->resize(150, 150);
                $img->save(public_path('uploads/admins/' . $name));
            }

            return response()->json([
                'status'  => true,
                'message' => 'Yea! A News User Added Successfully'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'     => 'required|string|min:3|max:30',
            'username' => 'required|string|min:3|max:20|unique:admins,username,' . $request->id,
            'email'    => 'required|email:rfc,dns|unique:admins,email,' . $request->id,
            'role'     => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ]);
        }

        try {
            $user = Admin::find($request->id);

            if ($request->has('image')) {
                if (file_exists(public_path($user->image)) && $user->image != null) {
                    unlink(public_path($user->image));
                }
                $extension = $request->file('image')->extension();
                $name = $request->username . '.' . $extension;
            } else if ($user->image != null) {
                $last = explode('/', $user->image);
                $name = end($user);
            } else {
                $name = null;
            }

            $user->name     = $request->name;
            $user->username = $request->username;
            $user->email    = $request->email;
            $user->role     = $request->role;
            $user->image    = $request->has('image') ? '/uploads/admins/' . $name : $user->image;
            if ($request->password == '') {
                $user->password = Hash::make($request->password);
            }
            $user->update();

            if ($request->has('image')) {
                $img = Image::make($request->file('image'))->resize(150, 150);
                $img->save(public_path('uploads/admins/' . $name));
            }

            return response()->json([
                'status'  => true,
                'message' => 'Yea! A News User Updated Successfully'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function destroy(Request $request)
    {
        try {
            $admin_id = Admin::find($request->id);

            $admin_id->delete();
            return "User Delete successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }

    // permission edit
    public function permissionEdit($id)
    {
        $access = AdminAccess::where('admin_id', Auth::guard('admin')->user()->id)
            ->pluck('permissions')
            ->toArray();
        if (!in_array("userAccess", $access)) {
            return view("admin.unauthorize");
        }
        
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
            return redirect()->route('admin.user.create')->with('success', 'Permissions added successfullly');
        } catch (\Throwable $e) {
            return redirect()->route('admin.user.create');
        }
    }
}
