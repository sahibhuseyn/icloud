<?php

namespace App\Http\Controllers\Client;

use App\About;
use App\BestSelling;
use App\Choose;
use App\Faq;
use App\HowWork;
use App\IphoneSim;
use App\Post;
use App\SelectIphone;
use App\Slider;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index(){
        $language = session('language');
        $sliders = Slider::getSlidesByLanguage($language);
        $chooses = Choose::getChoosesByLanguage($language);
        $faqs = Faq::getFaqsByLanguage($language);
        $posts = Post::getPostsByLanguageCode($language);
        $abouts = About::getAboutByLanguage($language);
        $testimonials = Testimonial::getTestimonialsByLanguageCode($language);
        $how_works = HowWork::getHowWorkByLanguage($language);
        $iphone_sims = IphoneSim::getIphoneSimByLanguage($language);
        $select_iphones = SelectIphone::getIphonesByLanguageCode($language);
        $best_sellings = BestSelling::getBestSellersByLanguage($language);

        return view('client.index.index', compact('sliders', 'chooses', 'faqs', 'posts', 'abouts', 'testimonials',
            'how_works', 'iphone_sims', 'select_iphones', 'best_sellings'));
    }

    public function getPrice (Request $request) {
        $iphone_sim = IphoneSim::getCourseById($request->id);
        die($iphone_sim);
    }


}
