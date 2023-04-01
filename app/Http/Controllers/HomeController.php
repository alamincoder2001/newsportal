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
    
    // category_wise
    public function categoryWise($slug)
    {
        $category = Category::where("slug", $slug)->first();
        return view("categorywise", compact('category'));
    }
}
