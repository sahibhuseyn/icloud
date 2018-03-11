<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getSlidesByLanguage($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return Slider::where('language_id', $language->id)->orderBy('position')->get();
    }
}
