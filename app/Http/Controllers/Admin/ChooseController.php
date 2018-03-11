<?php

namespace App\Http\Controllers\Admin;

use App\Choose;
use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ChooseController extends Controller
{
    public function show ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $chooses = Choose::getChoosesByLanguage($language_code);

        return view('admin.choose.choose', compact('chooses', 'language_id'));
    }

    public function add ($language_id, Request $request) {

        if (!$request->title || !$request->text) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $testimonial = new Choose();
        $testimonial->language_id = $request->language_id;
        $testimonial->title = $request->title;
        $testimonial->text = $request->text;
        $testimonial->icon = $request->icon;


        $testimonial->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update (Choose $testimonial, Request $request) {
        if (!$request->title || !$request->text) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }


        $testimonial->title = $request->title;
        $testimonial->text = $request->text;
        $testimonial->icon = $request->icon;
        $testimonial->save();

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete (Choose $testimonial) {

        $testimonial->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
