<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ad;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.ad.index');
    }

    public function fetch()
    {
        return Ad::get();
    }

    public function store(Request $request)
    {

        try{

            if(!empty($request->id)){
                $validator = Validator::make($request->all(), [
                    'title' => 'required|unique:ads,title,' . $request->id
                ]);

                $data = Ad::find($request->id);
                $oldImg = $data->image;
                $data->updated_at = Carbon::now();
            }else {
                $validator = Validator::make($request->all(), [
                    'title' => 'required|unique:ads'
                ]);

                $data = new Ad();
                $data->created_at = Carbon::now();
            }

            if($validator->fails()){
                return response()->json(["Error" => $validator->errors()]);
            }

            $data->title = $request->title;
            $data->slug = $this->make_slug($request->title);

            if($request->hasFile("image")){
                if(isset($oldImg) && $oldImg != '')
                {
                    if(File::exists($oldImg)){
                        File::delete($oldImg);
                    }
                }

                $data->image = $this->imageUpload($request, "image", "uploads/ads") ?? '';
            }

            $data->save();
            if(!empty($request->id)){
                return 'Ad Update Success';
            }else{
                return "Ad Create Success";
            }


        } catch(\Throwable $e){
            return "Something went wrong";
        }

    }

    public function destroy(Request $request)
    {
        try{

            $data = Ad::find($request->id);
            $oldImg = $data->image;
            if(File::exists($oldImg)){
                File::delete($oldImg);
            }
            $data->delete();

            return "Ad Delete Successfully";

        } catch(\Throable $e){
            return "somethig went wrong";
        }
    }
}