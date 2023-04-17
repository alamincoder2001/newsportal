<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return Department::get();
    }

    public function create()
    {
        return view("admin.department.create");
    }

    public function store(Request $request)
    {
        try {
            if (!empty($request->id)) {
                $validator = Validator::make($request->all(), [
                    "department_name" => "required|unique:departments,department_name," . $request->id
                ]);
                $data             = Department::find($request->id);
                $data->updated_at = Carbon::now();
            } else {
                $validator = Validator::make($request->all(), [
                    "department_name" => "required|unique:departments"
                ]);
                $data             = new Department();
                $data->created_at = Carbon::now();
            }

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            $data->department_name = $request->department_name;
            $data->addedBy         = Auth::guard('admin')->user()->id;

            $data->save();

            if (!empty($request->id)) {
                return "Department updated successfully";
            } else {
                return "Department insert successfully";
            }
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }

    public function destroy(Request $request)
    {
        try {
            $data = Department::find($request->id);
            $data->delete();
            return "Department delete successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
