<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsCounter extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id', 'id')->select('id', 'title', 'slug');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id')->select('id', 'name', 'slug');
    }
}
