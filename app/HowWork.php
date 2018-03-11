<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HowWork extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getHowWorkByLanguage($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return HowWork::where('language_id', $language->id)->get();
    }
}
