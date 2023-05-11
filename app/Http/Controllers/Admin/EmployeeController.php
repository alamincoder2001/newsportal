<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Employee;
use App\Models\AdminAccess;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $access = AdminAccess::where('admin_id', Auth::guard('admin')->user()->id)
            ->pluck('permissions')
            ->toArray();
        if (!in_array("employeeList", $access)) {
            return view("admin.unauthorize");
        }
        return view('admin.employee.employee-list');
    }
    public function getEmployee()
    {
        $employee = Employee::with('department', 'designation')->get();
        return $employee;
    }

    public function create()
    {
        $access = AdminAccess::where('admin_id', Auth::guard('admin')->user()->id)
            ->pluck('permissions')
            ->toArray();
        if (!in_array("employeeEntry", $access)) {
            return view("admin.unauthorize");
        }
        return view('admin.employee.create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'              => 'required|string|min:3|max:30',
            'email'             => 'required|email:rfc,dns|unique:employees',
            'mobile'            => 'required|digits:11|unique:employees',
            'gender'            => 'required|string|in:male,female,other',
            'join_date'         => 'required|date',
            'birth_date'        => 'required|date',
            'nid_no'            => 'required|unique:employees',
            'nid_length'        => 'required|in:10,13,17',
            'designation'       => 'required|integer',
            'department'        => 'required|integer',
            'father_name'       => 'string|min:3|max:50|nullable',
            'mother_name'       => 'string|min:3|max:50|nullable',
            'present_address'   => 'string|min:10|max:500|nullable',
            'permanent_address' => 'string|min:10|max:500|nullable',
            'salary'            => 'required',
            'nid_file'          => 'nullable|mimes:pdf,jpeg,png,jpg,gif',
            'photo'             => 'nullable|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ]);
        }
        try {

            if ($request->hasFile('nid_file')) {
                $extension = $request->file('nid_file')->extension();
                $nid_name = $request->mobile . '.' . $extension;
            }
            if ($request->hasFile('photo')) {
                $extension = $request->file('photo')->extension();
                $photo_name = $request->mobile . '.' . $extension;
            }

            Employee::create([
                'name'              => $request->name,
                'email'             => $request->email,
                'mobile'            => $request->mobile,
                'gender'            => $request->gender,
                'join_date'         => $request->join_date,
                'birth_date'        => $request->birth_date,
                'nid_no'            => $request->nid_no,
                'designation_id'    => $request->designation,
                'department_id'     => $request->department,
                'father_name'       => $request->father_name,
                'mother_name'       => $request->mother_name,
                'present_address'   => $request->present_address,
                'permanent_address' => $request->permanent_address,
                'salary'            => $request->salary,
                'addedBy'           => Auth::guard('admin')->user()->id,
                'nid_file'          => $request->hasFile('nid_file') ? '/uploads/nids/' . $nid_name : null,
                'photo'             => $request->hasFile('photo') ? '/uploads/employees/' . $photo_name : null,
            ]);

            if ($request->hasFile('nid_file')) {
                move_uploaded_file($request->nid_file, public_path('uploads/nids/' . $nid_name));
            }
            if ($request->hasFile('photo')) {
                $img = Image::make($request->file('photo'))->resize(150, 150);
                $img->save(public_path('uploads/employees/' . $photo_name));
            }

            return response()->json([
                'status'  => true,
                'message' => 'Yea! A Employee Upload Successfully'
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
            'name'              => 'required|string|min:3|max:30',
            'email'             => 'required|email:rfc,dns|unique:employees,email,' . $request->id,
            'mobile'            => 'required|digits:11|unique:employees,mobile,' . $request->id,
            'gender'            => 'required|string|in:male,female,other',
            'join_date'         => 'required|date',
            'birth_date'        => 'required|date',
            'nid_no'            => 'required|unique:employees,nid_no,' . $request->id,
            'nid_length'        => 'required|in:10,13,17',
            'designation'       => 'required|integer',
            'department'        => 'required|integer',
            'father_name'       => 'string|min:3|max:50|nullable',
            'mother_name'       => 'string|min:3|max:50|nullable',
            'present_address'   => 'string|min:10|max:500|nullable',
            'permanent_address' => 'string|min:10|max:500|nullable',
            'salary'            => 'required',
            'nid_file'          => 'nullable|mimes:pdf,jpeg,png,jpg,gif',
            'photo'             => 'nullable|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ]);
        }
        try {
            $employee = Employee::find($request->id);

            if ($request->hasFile('nid_file')) {
                if ($employee->nid_file != null && file_exists(public_path($employee->nid_file))) {
                    unlink(public_path($employee->nid_file));
                }
                $extension = $request->file('nid_file')->extension();
                $nid_name = $request->mobile . '.' . $extension;
            } else if ($employee->nid_file) {
                $last = explode('/', $employee->nid_file);
                $nid_name = end($last);
            } else {
                $nid_name = null;
            }

            if ($request->hasFile('photo')) {
                if ($employee->photo != null && file_exists(public_path($employee->photo))) {
                    unlink(public_path($employee->photo));
                }
                $extension = $request->file('photo')->extension();
                $photo_name = $request->mobile . '.' . $extension;
            } else if ($employee->photo) {
                $last = explode('/', $employee->photo);
                $photo_name = end($last);
            } else {
                $photo_name = null;
            }

            $employee->name              = $request->name;
            $employee->email             = $request->email;
            $employee->mobile            = $request->mobile;
            $employee->gender            = $request->gender;
            $employee->join_date         = $request->join_date;
            $employee->birth_date        = $request->birth_date;
            $employee->nid_no            = $request->nid_no;
            $employee->designation_id    = $request->designation;
            $employee->department_id     = $request->department;
            $employee->father_name       = $request->father_name;
            $employee->mother_name       = $request->mother_name;
            $employee->present_address   = $request->present_address;
            $employee->permanent_address = $request->permanent_address;
            $employee->salary            = $request->salary;
            $employee->addedBy           = Auth::guard('admin')->user()->id;
            $employee->nid_file          = $nid_name == null ? null : '/uploads/nids/' . $nid_name;
            $employee->photo             = $photo_name == null ? null : '/uploads/employees/' . $photo_name;
            $employee->update();

            if ($request->hasFile('nid_file')) {
                move_uploaded_file($request->nid_file, public_path('uploads/nids/' . $nid_name));
            }
            if ($request->hasFile('photo')) {
                $img = Image::make($request->file('photo'))->resize(150, 150);
                $img->save(public_path('uploads/employees/' . $photo_name));
            }

            return response()->json([
                'status'  => true,
                'message' => 'Yea! A Employee Updated Successfully'
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
            $data = Employee::find($request->id);
            $data->delete();
            return "Employee deleted successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
