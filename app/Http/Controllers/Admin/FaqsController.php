<?php

namespace App\Http\Controllers\Admin;

use App\Faq;
use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class FaqsController extends Controller
{
    public function show ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $faqs = Faq::getFaqsByLanguage($language_code);

        return view('admin.faqs.faqs', compact('faqs', 'language_id'));
    }

    public function add ($language_id, Request $request) {

        if (!$request->title  ||  !$request->text) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $testimonial = new Faq();
        $testimonial->language_id = $request->language_id;
        $testimonial->title = $request->title;
        $testimonial->text = $request->text;


        $testimonial->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update (Faq $testimonial, Request $request) {
        if (!$request->title || !$request->text) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }


        $testimonial->title = $request->title;
        $testimonial->text = $request->text;
        $testimonial->save();

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete (Faq $testimonial) {
        $testimonial->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
