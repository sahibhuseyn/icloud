<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IphoneSim extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getIphoneSimByLanguage($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return IphoneSim::where('language_id', $language->id)->get();
    }
    public static function getCourseById ($id) {
        return IphoneSim::where('id', $id)->first();
    }
}
