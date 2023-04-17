<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ["id"];

    public function category()
    {
        return $this->hasMany(NewsPublished::class, "news_id", "id")->with('categoryName');
    }

    // public function counter()
    // {
    //     return $this->hasOneThrough(NewsCounter::class, NewsPublished::class, 'category_id', 'id', 'id', 'category_id');
    // }

}
