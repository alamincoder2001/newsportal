<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        return view("categorywise", compact('category'));
    }
}
