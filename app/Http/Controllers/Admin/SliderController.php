<?php

namespace App\Http\Controllers\Admin;

use App\Language;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
    public function listSlides ($language_code) {
        $language_id = Language::getLanguageByCode($language_code);
        $slides = Slider::getSlidesByLanguage($language_code);
        return view('admin.slider.slides', compact('slides', 'language_id'));
    }

    public function update (Slider $slider, Request $request) {
        if ($request->image) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);
            $slider->image = $filename;
            $slider->update();
        }

        $slider->header = $request->first_overlay;
        $slider->title = $request->second_overlay;
        $slider->overlay = $request->third_overlay;
        $slider->btn_url = $request->btn_url;
        $slider->btn_sec_url = $request->btn_sec_url;
        $slider->btn_name = $request->btn_name;
        $slider->btn_sec_name = $request->btn_sec_name;
        $slider->position = $request->position;
        $slider->update();

        Session::flash('success', 'Successfully updated');
        return back();
    }

    public function delete (Slider $slider) {
        $slider->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }

    public function add ($language_id, Request $request) {

        if (!$request->image) {
            Session::flash('fail', 'Please upload image');

            return back();
        }

        $slide = new Slider;
        $slide->language_id = $language_id;
        $slide->header = $request->first_overlay;
        $slide->title = $request->second_overlay;
        $slide->overlay = $request->third_overlay;
        $slide->btn_url = $request->btn_url;
        $slide->btn_sec_url = $request->btn_sec_url;
        $slide->btn_name = $request->btn_name;
        $slide->btn_sec_name = $request->btn_sec_name;
        $slide->position = $request->position;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $slide->image = $filename;

        $slide->save();
        Session::flash('success', 'Successfully changed');

        return back();

    }
}
