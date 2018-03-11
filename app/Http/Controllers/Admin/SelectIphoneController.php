<?php

namespace App\Http\Controllers\Admin;

use App\Language;
use App\SelectIphone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SelectIphoneController extends Controller
{
    public function show ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $selects = SelectIphone::getIphonesByLanguageCode($language_code);

        return view('admin.iphone-slider.slider', compact('selects', 'language_id'));
    }

    public function add ($language_id, Request $request) {

        if (!$request->phone_name  || !$request->image ) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $testimonial = new SelectIphone();
        $testimonial->language_id = $request->language_id;
        $testimonial->phone_name = $request->phone_name;
        $testimonial->country_name = implode('_',$request->country_name);
        $testimonial->estimate_day = implode('_', $request->estimate_day);
        $testimonial->service_type = implode('_',$request->service_type);
        $testimonial->price = implode(',',$request->price);


        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $testimonial->image = $filename;

        $testimonial->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update (SelectIphone $testimonial, Request $request) {
        if (!$request->phone_name) {
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

        $testimonial->phone_name = $request->phone_name;
        $testimonial->country_name = implode('_',$request->country_name);
        $testimonial->estimate_day = implode('_', $request->estimate_day);
        $testimonial->service_type = implode('_',$request->service_type);
        $testimonial->price = implode(',',$request->price);
        $testimonial->save();

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete (SelectIphone $testimonial) {
        $testimonial->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
