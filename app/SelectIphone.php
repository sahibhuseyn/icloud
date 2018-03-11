<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectIphone extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }


    public static function getIphonesByLanguageCode($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return SelectIphone::where('language_id', $language->id)->get();
    }
}
