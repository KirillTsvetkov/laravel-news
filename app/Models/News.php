<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

class News extends Model
{
    use HasFactory;
    use Favoriteable;

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'news_tags', 'news_id','tag_id' )->withTimestamps();
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function relatedNewsByTag()
    {
        return News::whereHas('tags', function ($query) {
            $tagIds = $this->tags()->pluck('tags.id')->all();
            $query->whereIn('tags.id', $tagIds);
        })->where('id', '<>', $this->id)->get();
    }


}
