<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BestSelling extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getBestSellersByLanguage($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return BestSelling::where('language_id', $language->id)->get();
    }
}
