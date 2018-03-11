<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }


    public static function getPostsByLanguageCode($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return Post::where('language_id', $language->id)->orderBy('created_at','desc')->take(6)->get();
    }

    public static function getPostBySlug ($slug) {
        return Post::where('slug', $slug)->first();
    }

}
