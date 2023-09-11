<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsPublished extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function categoryName()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }
    public function news()
    {
        return $this->belongsTo(News::class, "news_id", "id");
    }
}
