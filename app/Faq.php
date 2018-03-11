<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getFaqsByLanguage($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return Faq::where('language_id', $language->id)->get();
    }
}
