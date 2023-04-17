<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);
        View::share("setting", Setting::first());
        View::share("categories", Category::where('is_menu', 'true')->get());
        View::share("otherscategory", Category::where('is_menu', 'false')->get());
        View::share("headlines", DB::table('news')
            ->join('news_publisheds', 'news.id', '=', 'news_publisheds.news_id')
            ->join('categories', 'news_publisheds.category_id', '=', 'categories.id')
            ->where('news_publisheds.category_id', '=', '20')
            ->select('news.id as news_id', 'news.title as title', 'news.slug as news_slug', 'categories.id as cat_id', 'categories.name as cat_name', 'categories.slug as cat_slug')
            ->get());
        // View::share("otherscategory", DB::select("SELECT c.* FROM categories c WHERE c.is_menu = 'false'"));
    }
}
