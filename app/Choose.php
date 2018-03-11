<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choose extends Model
{
    public function language () {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public static function getChoosesByLanguage($language_code) {
        $language = Language::getLanguageByCode($language_code);

        return Choose::where('language_id', $language->id)->get();
    }

}
