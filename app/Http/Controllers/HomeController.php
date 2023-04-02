<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home");
    }
    
    // category_wise method
    public function categoryWise($slug)
    {
        $category = Category::where("slug", $slug)->first();
        if(empty($category)){
            return back();
        }
        $categorywisenews = News::where("category_id", $category->id)->get(); 
        return view("categorywise", compact('category', 'categorywisenews'));
    }

    // category_wise method
    public function singleNews($slug)
    {
        $news = News::where("slug", $slug)->first();
        if(empty($news)){
            return back();
        }
        return view("singlepage", compact('news'));
    }
}
