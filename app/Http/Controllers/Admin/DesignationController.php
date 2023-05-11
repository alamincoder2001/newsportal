<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminAccess;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DesignationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return Designation::get();
    }

    public function create()
    {
        $access = AdminAccess::where('admin_id', Auth::guard('admin')->user()->id)
            ->pluck('permissions')
            ->toArray();
        if (!in_array("designationEntry", $access)) {
            return view("admin.unauthorize");
        }
        return view("admin.designation.create");
    }

    public function store(Request $request)
    {
        try {
            if (!empty($request->id)) {
                $validator = Validator::make($request->all(), [
                    "designation_name" => "required|unique:designations,designation_name," . $request->id
                ]);
                $data             = Designation::find($request->id);
                $data->updated_at = Carbon::now();
            } else {
                $validator = Validator::make($request->all(), [
                    "designation_name" => "required|unique:designations"
                ]);
                $data             = new Designation();
                $data->created_at = Carbon::now();
            }

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            $data->designation_name = $request->designation_name;
            $data->addedBy         = Auth::guard('admin')->user()->id;

            $data->save();

            if (!empty($request->id)) {
                return "Designation updated successfully";
            } else {
                return "Designation insert successfully";
            }
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }

    public function destroy(Request $request)
    {
        try {
            $data = Designation::find($request->id);
            $data->delete();
            return "Designation delete successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
