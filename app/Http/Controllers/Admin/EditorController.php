<?php

namespace App\Http\Controllers\Admin;

use App\Models\Editor;
use App\Models\AdminAccess;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EditorController extends Controller
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
        if (!in_array("categoryEntry", $access)) {
            return view("admin.unauthorize");
        }
        return view("admin.editor.index");
    }

    public function fetch()
    {
        return Editor::get();
    }

    public function store(Request $request)
    {
        try {
            if (!empty($request->id)) {
                $validator = Validator::make($request->all(), [
                    "name" => "required|unique:editors,name," . $request->id
                ]);
                $data             = Editor::find($request->id);
                $data->updated_at = Carbon::now();
            } else {
                $validator = Validator::make($request->all(), [
                    "name" => "required|unique:editors"
                ]);
                $data             = new Editor();
                $data->created_at = Carbon::now();
            }

            if ($validator->fails()) {
                return response()->json(["error" => $validator->errors()]);
            }

            $data->name   = $request->name;
            $data->status = $request->status;
            $data->save();

            if (!empty($request->id)) {
                return "Editor updated successfully";
            } else {
                return "Editor insert successfully";
            }
        } catch (\Throwable $e) {
            return "Something went wrong";
        }
    }

    public function destroy(Request $request)
    {
        try {
            $data = Editor::find($request->id);
            $data->delete();
            return "Editor delete successfully";
        } catch (\Throwable $e) {
            return "Opps! something went wrong";
        }
    }
}
