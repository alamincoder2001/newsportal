<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function imageUpload($request, $image, $directory)
    {
        $doUpload = function ($image) use ($directory) {
            $name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $extention = $image->getClientOriginalExtension();
            $imageName = $name . '_' . uniqId() . '.' . $extention;
            $image->move($directory, $imageName);
            return $directory . '/' . $imageName;
        };
        if (!empty($image) && $request->hasFile($image)) {
            $file = $request->file($image);
            if (is_array($file) && count($file)) {
                $imagesPath = [];
                foreach ($file as $key => $image) {
                    $imagesPath[] = $doUpload($image);
                }
                return $imagesPath;
            } else {
                return $doUpload($file);
            }
        }

        return false;
    }

    function make_slug($string)
    {
        return preg_replace('/\s+/u', '-', trim($string));
    }

    function getUniqueId()
    {
        $lastNewsId = DB::table('news')->select('unique_id')->orderBy('unique_id', 'Desc')->take('1')->get();
        if (count($lastNewsId) > 0) {
            return $lastNewsId[0]->unique_id + 1;
        } else {
            return date('Y') . '000001';
        }
    }

    public function getCategoryData($category, $order = null)
    {
        // $data = News::whereHas('category', function ($query) use ($category) {
        //     return $query->where('category_id', $category);
        // })->with(['category' => function ($query) use ($category) {
        //     return $query->where('category_id', $category);
        // }])->get();

        if ($order == null) {
            $data = News::whereHas('category', function ($query) use ($category) {
                return $query->where('category_id', $category);
            })->with(['category' => function ($query) use ($category) {
                return $query->where('category_id', $category);
            }])->where('is_published', 'active')->where('is_archive', 'no')->get();
        } else {
            $data = News::whereHas('category', function ($query) use ($category) {
                return $query->where('category_id', $category);
            })->with(['category' => function ($query) use ($category) {
                return $query->where('category_id', $category);
            }])->where('is_published', 'active')->where('is_archive', 'no')->orderBy('id', $order)->get();
        }

        return $data;
    }
}
