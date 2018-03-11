<?php

namespace App\Http\Controllers\Admin;

use App\IphoneSim;
use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class IPhoneSimController extends Controller
{
    public function show ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $sims = IphoneSim::getIphoneSimByLanguage($language_code);

        return view('admin.iphone-sim.sim', compact('sims', 'language_id'));
    }

    public function add ($language_id, Request $request) {

        if (!$request->name  || !$request->delivery_time ) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $testimonial = new IphoneSim();
        $testimonial->language_id = $request->language_id;
        $testimonial->name = $request->name;
        $testimonial->delivery_time = $request->delivery_time;
        $testimonial->price = $request->price;

        $testimonial->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update (IphoneSim $testimonial, Request $request) {
        if (!$request->name) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $testimonial->name = $request->name;
        $testimonial->delivery_time = $request->delivery_time;
        $testimonial->price = $request->price;
        $testimonial->save();

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete (IphoneSim $testimonial) {
        $testimonial->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
