<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function path()
    {
    	return route('articles.show', $this);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);  
    }

    public function user()
    {
    	return $this->belongsTo(User::class);  // select * from user where article_id = $article->id
    }
    // $article->user
    
    // public function author()
    // {
    //     return $this->belongsTo(User::class, 'user_id');  // select * from user where article_id = $article->id
    // }
}
