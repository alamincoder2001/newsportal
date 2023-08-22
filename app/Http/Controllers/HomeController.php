<?php

namespace App\Http\Controllers;


use App\Models\News;
use App\Models\Category;
use App\Models\NewsCounter;
use App\Models\PageVisitor;
use App\Models\AdvertiseOne;
use App\Models\AdvertiseTwo;
use Illuminate\Http\Request;
use App\Models\AdvertiseFive;
use App\Models\AdvertiseFour;
use App\Models\AdvertiseThree;
use App\Models\Epaper;
use App\Models\Newsvisitor;
use Illuminate\Support\Facades\DB;
use Rajurayhan\Bndatetime\BnDateTimeConverter;

class HomeController extends Controller
{
    public function index()
    {
        $today = date('d-m-Y');
        $check = PageVisitor::where("date", $today)->where("ipaddress", request()->ip())->first();
        if (empty($check)) {
            PageVisitor::create([
                'counter' => 1,
                'date'  => $today,
                'ipaddress' => request()->ip(),
            ]);
        }

        $shilpoBanijjo  = $this->getCategoryData(16, 'desc');
        $homeSliders    = $this->getCategoryData(17, 'desc')->take(8);
        $focush         = $this->getCategoryData(18, 'desc')->take(20);
        $highlights     = $this->getCategoryData(19, 'desc')->take(12);
        $jatioNews      = $this->getCategoryData(3, 'desc')->take(12);
        $AntorjatikNews = $this->getCategoryData(5, 'desc')->take(12);
        $sportsNews     = $this->getCategoryData(4, 'desc')->take(12);
        $homeTopRight   = $this->getCategoryData(21, 'desc')->take(3);
        $jibonDhara     = $this->getCategoryData(12, 'desc')->take(5);
        $binodon        = $this->getCategoryData(2, 'desc')->take(5);
        $healthCorner   = $this->getCategoryData(8, 'desc')->take(5);
        $coxBazar       = $this->getCategoryData(7, 'desc')->take(12);

        $ad1 = AdvertiseOne::first();
        $ad2 = AdvertiseTwo::first();
        $ad3 = AdvertiseThree::first();
        $ad4 = AdvertiseFour::first();
        $ad5 = AdvertiseFive::first();

        $epaper = Epaper::first();

        $topJatioNews = NewsCounter::where('category_id', 3)->with('news', 'category')->orderBy('read_count', 'desc')->take(12)->get();

        $categorywisenews = News::with('category')->where('is_published', 'active')->where('is_archive', 'no')->latest()->get();

        return view("home", compact('homeSliders', 'focush', 'highlights', 'jatioNews', 'topJatioNews', 'AntorjatikNews', 'sportsNews', 'homeTopRight', 'jibonDhara', 'binodon', 'healthCorner', 'shilpoBanijjo', 'coxBazar', 'categorywisenews', 'ad1', 'ad2', 'ad3', 'ad4', 'ad5', 'epaper'));
    }

    // category_wise method
    public function categoryWise($slug)
    {
        $category = Category::where("slug", $slug)->first();

        $categorywisenews = News::whereHas('category', function ($query) use ($category) {
            return $query->where('category_id', $category->id);
        })->with(['category' => function ($query) use ($category) {
            return $query->where('category_id', $category->id);
        }])->where('is_published', 'active')->where('is_archive', 'no')->latest()->get();

        $latestNews = News::where('is_published', 'active')->where('is_archive', 'no')->with('category')->latest('id')->take(10)->get();
        $mostRead = NewsCounter::with('news', 'category')->orderBy('read_count', 'desc')->take(10)->get();

        $ad1 = AdvertiseOne::first();
        // return $categorywisenews = News::with(['category' => function ($query) use ($category) {
        //     return $query->where('category_id', $category->id);
        // }])->get();

        return view("categorywise", compact('category', 'categorywisenews', 'latestNews', 'mostRead', 'ad1'));
    }


    // category_wise method
    public function categoryWiseAll($slug)
    {
        $category = Category::where("slug", $slug)->first();

        $categorywisenews = News::whereHas('category', function ($query) use ($category) {
            return $query->where('category_id', $category->id);
        })
            ->where('is_published', 'active')
            ->where('is_archive', 'no')
            ->latest()
            // ->with(['category' => function ($query) use ($category) {
            //     return $query->where('category_id', $category->id);
            // }])
            ->paginate(12);

        $latestNews = News::with('category')->where('is_archive', 'no')->where('is_published', 'active')->latest()->take(20)->get();
        $mostRead = NewsCounter::with('news', 'category')->orderBy('read_count', 'desc')->take(10)->get();
        $ad1 = AdvertiseOne::first();

        return view("categoryWiseAll", compact('category', 'categorywisenews', 'latestNews', 'mostRead', 'ad1'));
    }

    // category_wise method
    public function singleNews($cat_slug, $slug)
    {
        $news = News::where("slug", $slug)->where('is_published', 'active')->where('is_archive', 'no')->first();
        $category = Category::where("slug", $cat_slug)->first();

        $d = new  BnDateTimeConverter();
        $news->created_banglaDate = $d->getConvertedDateTime($news->created_at,  'BnEn', '');

        $categorywisenews = News::whereHas('category', function ($query) use ($category) {
            return $query->where('category_id', $category->id);
        })->where('is_published', 'active')->where('is_archive', 'no')->latest()->paginate(8);

        // Increment the read counter
        $check = Newsvisitor::where('ipaddress', request()->ip())->where('news_id', $news->id)->first();
        if (!$check) {
            Newsvisitor::create([
                'news_id' => $news->id,
                'date' => date('Y-m-d'),
                'ipaddress' => request()->ip()
            ]);
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
        }

        $news->counter = NewsCounter::where('news_id', $news->id)->where('category_id', $category->id)->first()->read_count;

        $ad3 = AdvertiseThree::first();

        $latestNews = News::with('category')->where('is_published', 'active')->where('is_archive', 'no')->latest()->take(20)->get();
        $mostRead = NewsCounter::with('news', 'category')->orderBy('read_count', 'desc')->take(10)->get();
        
        return view("singlepage", compact('news', 'categorywisenews', 'category', 'latestNews', 'mostRead', 'ad3'));
    }

    public function epaper()
    {
        $date = date("Y-m-d");
        $epapers = Epaper::where("publish_date", $date)->latest()->get();
        return view("epaper", compact('epapers'));
    }

    public function archive($date)
    {
        $news = DB::select("SELECT * FROM news n WHERE n.is_published = 'active' and date(n.created_at) = '$date'");
        foreach ($news as $item) {
            $item->category = DB::select("SELECT np.*,
                                    c.slug,
                                    c.name
                                FROM news_publisheds np
                                LEFT JOIN categories c ON c.id = np.category_id
                                WHERE np.news_id = $item->id");
        }

        return view("archive", compact('news'));
    }

    // epaper list
    public function oldpaperlist(Request $request)
    {
        try {
            $data = Epaper::where('publish_date', $request->oldDate)->orderBy('id', 'ASC')->get();

            return ['status' => true, 'message' => $data];
        } catch (\Throwable $th) {
            return ['status' => false, 'message' => $th->getMessage()];
        }
    }
}
