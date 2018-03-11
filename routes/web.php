<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => ['language', 'web']], function () {

    Route::get('/', 'Client\MainController@index')->name('index');
    Route::post('/register-price', 'Client\MainController@getPrice')->name('register_price');


    Route::group(['prefix' => 'language_change'], function (){
        Route::get('/{code}', 'Client\LanguageController@changeLanguage')->name('change_language');
    });

});


// ================================= ADMIN ===============================================================
Route::group(['middleware' => ['web', 'auth', 'sharedData'], 'prefix' => 'dash'], function () {
    Route::get('/', 'Admin\MainController@index')->name('admin_index');

    Route::group(['prefix' => 'languages'], function () {
        Route::get('/', 'Admin\LanguageController@index')->name('admin_languages');
        Route::post('/add', 'Admin\LanguageController@add')->name('admin_languages_add');
        Route::post('/update', 'Admin\LanguageController@update')->name('admin_languages_update');
        Route::get('/delete/{language}', 'Admin\LanguageController@delete')->name('admin_languages_delete');
    });

    Route::group(['prefix' => 'translations'], function () {
        Route::get('/{file_name}', 'Admin\TranslationController@listKeys')->name('admin_translations');
        Route::post('/{file_name}/{key}/add', 'Admin\TranslationController@add')->name('admin_translations_add');
        Route::post('/{file_name}/{key}/update', 'Admin\TranslationController@update')->name('admin_translations_update');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/{language_code}', 'Admin\CategoryController@listCategories')->name('admin_categories');
        Route::post('/{language_id}/add', 'Admin\CategoryController@add')->name('admin_categories_add');
        Route::post('/{category}/update', 'Admin\CategoryController@update')->name('admin_categories_update');
        Route::post('/{category}/delete', 'Admin\CategoryController@delete')->name('admin_categories_delete');
    });

    Route::group(['prefix' => 'types'], function () {
        Route::get('/{language_code}', 'Admin\TypeController@listTypes')->name('admin_types');
        Route::post('/{language_id}/add', 'Admin\TypeController@add')->name('admin_types_add');
        Route::post('/{type}/update', 'Admin\TypeController@update')->name('admin_types_update');
        Route::post('/{type}/delete', 'Admin\TypeController@delete')->name('admin_types_delete');
    });

    Route::group(['prefix' => 'slider'], function () {
        Route::get('/{language_code}', 'Admin\SliderController@listSlides')->name('admin_slider');
        Route::post('/{language_id}/add', 'Admin\SliderController@add')->name('admin_slider_add');
        Route::post('/{slider}/update', 'Admin\SliderController@update')->name('admin_slider_update');
        Route::post('/{slider}/delete', 'Admin\SliderController@delete')->name('admin_slider_delete');
    });

    Route::group(['prefix' => 'testimonials'], function () {
        Route::get('/{language_code}', 'Admin\TestimonialController@show')->name('admin_testimonials');
        Route::post('/{language_id}/add', 'Admin\TestimonialController@add')->name('admin_testimonials_add');
        Route::post('/{testimonial}/update', 'Admin\TestimonialController@update')->name('admin_testimonials_update');
        Route::post('/{testimonial}/delete', 'Admin\TestimonialController@delete')->name('admin_testimonials_delete');
    });

    Route::group(['prefix' => 'faqs'], function () {
        Route::get('/{language_code}', 'Admin\FaqsController@show')->name('admin_faqs');
        Route::post('/{language_id}/add', 'Admin\FaqsController@add')->name('admin_faqs_add');
        Route::post('/{testimonial}/update', 'Admin\FaqsController@update')->name('admin_faqs_update');
        Route::post('/{testimonial}/delete', 'Admin\FaqsController@delete')->name('admin_faqs_delete');
    });

    Route::group(['prefix' => 'chooses'], function () {
        Route::get('/{language_code}', 'Admin\ChooseController@show')->name('admin_chooses');
        Route::post('/{language_id}/add', 'Admin\ChooseController@add')->name('admin_chooses_add');
        Route::post('/{testimonial}/update', 'Admin\ChooseController@update')->name('admin_chooses_update');
        Route::post('/{testimonial}/delete', 'Admin\ChooseController@delete')->name('admin_chooses_delete');
    });

    Route::group(['prefix' => 'abouts'], function () {
        Route::get('/{language_code}', 'Admin\AboutController@show')->name('admin_about');
        Route::post('/{language_id}/add', 'Admin\AboutController@add')->name('admin_about_add');
        Route::post('/{testimonial}/update', 'Admin\AboutController@update')->name('admin_about_update');
        Route::post('/{testimonial}/delete', 'Admin\AboutController@delete')->name('admin_about_delete');
    });

    Route::group(['prefix' => 'iphone-sim-unlock'], function () {
        Route::get('/{language_code}', 'Admin\IPhoneSimController@show')->name('iphone-sim-unlock');
        Route::post('/{language_id}/add', 'Admin\IPhoneSimController@add')->name('iphone-sim-unlock_add');
        Route::post('/{testimonial}/update', 'Admin\IPhoneSimController@update')->name('iphone-sim-unlock_update');
        Route::post('/{testimonial}/delete', 'Admin\IPhoneSimController@delete')->name('iphone-sim-unlock_delete');
    });

    Route::group(['prefix' => 'how_works'], function () {
        Route::get('/{language_code}', 'Admin\HowWorkController@show')->name('how_works');
        Route::post('/{language_id}/add', 'Admin\HowWorkController@add')->name('how_works_add');
        Route::post('/{testimonial}/update', 'Admin\HowWorkController@update')->name('how_works_update');
        Route::post('/{testimonial}/delete', 'Admin\HowWorkController@delete')->name('how_works_delete');
    });

    Route::group(['prefix' => 'select_iphone'], function () {
        Route::get('/{language_code}', 'Admin\SelectIphoneController@show')->name('select_iphone');
        Route::post('/{language_id}/add', 'Admin\SelectIphoneController@add')->name('select_iphone_add');
        Route::post('/{testimonial}/update', 'Admin\SelectIphoneController@update')->name('select_iphone_update');
        Route::post('/{testimonial}/delete', 'Admin\SelectIphoneController@delete')->name('select_iphone_delete');
    });

    Route::group(['prefix' => 'posts'], function () {
        Route::get('/{language_code}', 'Admin\PostController@show')->name('admin_posts');
        Route::post('/{language_id}/add', 'Admin\PostController@add')->name('admin_posts_add');
        Route::get('/{post}/edit', 'Admin\PostController@edit')->name('admin_posts_edit');
        Route::post('/{post}/update', 'Admin\PostController@update')->name('admin_posts_update');
        Route::post('/{post}/delete', 'Admin\PostController@delete')->name('admin_posts_delete');
    });




});
// ================================= END ADMIN ==============================================================


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
