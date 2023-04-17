<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\NewsCounter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $shilpoBanijjo  = $this->getCategoryData(16, 'desc');
        $homeSliders    = $this->getCategoryData(17, 'desc')->take(3);
        $focush         = $this->getCategoryData(18, 'desc')->take(12);
        $highlights     = $this->getCategoryData(19, 'desc')->take(12);
        $jatioNews      = $this->getCategoryData(3, 'desc')->take(12);
        $AntorjatikNews = $this->getCategoryData(5, 'desc')->take(12);
        $sportsNews     = $this->getCategoryData(4, 'desc')->take(8);
        $homeTopRight   = $this->getCategoryData(21, 'desc')->take(3);
        $jibonDhara     = $this->getCategoryData(12, 'desc')->take(5);
        $binodon        = $this->getCategoryData(2, 'desc')->take(5);
        $healthCorner   = $this->getCategoryData(8, 'desc')->take(5);
        $coxBazar       = $this->getCategoryData(7, 'desc')->take(9);

        $topJatioNews = NewsCounter::where('category_id', '3')->with('news', 'category')->orderBy('read_count', 'desc')->take(12)->get();

        $categorywisenews = News::with('category')->latest()->get();

        return view("home", compact('homeSliders', 'focush', 'highlights', 'jatioNews', 'topJatioNews', 'AntorjatikNews', 'sportsNews', 'homeTopRight', 'jibonDhara', 'binodon', 'healthCorner', 'shilpoBanijjo', 'coxBazar', 'categorywisenews'));
    }

    // category_wise method
    public function categoryWise($slug)
    {
        $category = Category::where("slug", $slug)->first();

        $categorywisenews = News::whereHas('category', function ($query) use ($category) {
            return $query->where('category_id', $category->id);
        })->with(['category' => function ($query) use ($category) {
            return $query->where('category_id', $category->id);
        }])->get();

        $latestNews = News::with('category')->latest('id')->take(10)->get();
        $mostRead = NewsCounter::with('news', 'category')->orderBy('read_count', 'desc')->take(10)->get();

        // return $categorywisenews = News::with(['category' => function ($query) use ($category) {
        //     return $query->where('category_id', $category->id);
        // }])->get();

        return view("categorywise", compact('category', 'categorywisenews', 'latestNews', 'mostRead'));
    }


    // category_wise method
    public function categoryWiseAll($slug)
    {
        $category = Category::where("slug", $slug)->first();

        $categorywisenews = News::whereHas('category', function ($query) use ($category) {
            return $query->where('category_id', $category->id);
        })
            // ->with(['category' => function ($query) use ($category) {
            //     return $query->where('category_id', $category->id);
            // }])
            ->paginate(12);

        $latestNews = News::with('category')->latest('id')->take(20)->get();
        $mostRead = NewsCounter::with('news', 'category')->orderBy('read_count', 'desc')->take(10)->get();
        return view("categoryWiseAll", compact('category', 'categorywisenews', 'latestNews', 'mostRead'));
    }

    // category_wise method
    public function singleNews($cat_slug, $slug)
    {
        $news = News::where("slug", $slug)->first();
        $category = Category::where("slug", $cat_slug)->first();

        $categorywisenews = News::whereHas('category', function ($query) use ($category) {
            return $query->where('category_id', $category->id);
        })->paginate(8);


        // Increment the read counter
        $counter = NewsCounter::where('news_id', $news->id)->where('category_id', $category->id)->first();

        if ($counter) {
            $counter->increment('read_count');
        } else {
            NewsCounter::create([
                'news_id'     => $news->id,
                'category_id' => $category->id,
                'read_count'  => 1
            ]);
        }

        $latestNews = News::with('category')->latest('id')->take(20)->get();
        $mostRead = NewsCounter::with('news', 'category')->orderBy('read_count', 'desc')->take(10)->get();

        return view("singlepage", compact('news', 'categorywisenews', 'category', 'latestNews', 'mostRead'));
    }
}
