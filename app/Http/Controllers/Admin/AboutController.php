<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    public function show ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $abouts = About::getAboutByLanguage($language_code);

        return view('admin.about.about', compact('abouts', 'language_id'));
    }

    public function add ($language_id, Request $request) {

        if (!$request->text  || !$request->image ) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $testimonial = new About();
        $testimonial->language_id = $request->language_id;
        $testimonial->text = $request->text;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $testimonial->image = $filename;

        $testimonial->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update (About $testimonial, Request $request) {
        if (!$request->text) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        if ($request->image) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);

            $testimonial->image = $filename;

        }

        $testimonial->text = $request->text;
        $testimonial->save();

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete (About $testimonial) {
        $testimonial->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
