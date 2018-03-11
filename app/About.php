<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getAboutByLanguage($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return About::where('language_id', $language->id)->get();
    }
}
