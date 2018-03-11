<?php

namespace App\Http\Middleware;

use App\Category;
use App\IphoneSim;
use App\Type;
use Closure;
use App\Language;
use Illuminate\Support\Facades\View;


class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $visited = session('visited');

        if ($visited != true) {
            session(['language' => 'en']);
            session(['visited' => true]);
        }

        app()->setLocale(session('language'));
        setlocale(LC_TIME, session('language'));

        $categories = Category::getCategoriesByLanguage(session('language'));
        $types = Type::getTypesByLanguage(session('language'));
        $iphone_sims = IphoneSim::getIphoneSimByLanguage(session('language'));
        $languages = Language::getAllLanguages();


        View::share('__ILCATEGORIES__', $categories);
        View::share('__ILTYPES__', $types);
        View::share('__ILIPHONESIMS__', $iphone_sims);
        View::share('__ILLANGUAGES__', $languages);


        return $next($request);
    }
}
