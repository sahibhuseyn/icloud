@extends('client.layout.layout')

@section('section')

    <!-- WRAPPER -->    <!-- Preloader -->
    <div class="preloader"></div>
    <div class="wrapper" id="site-home">

        <!-- NAVIGATION AND SLIDER HOLDER -->
        <section class="site-holder" role="banner">

            <!-- HEADER -->
            <header class="site-header">

                <!-- STICKY HEADER -->
                <div class="sticky-header" id="sticky-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="left-widget pt-5 pb-5">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-whatsapp mr-5"></i>+99412345678</a></li>
                                        <li><a href=""><i class="fa fa-envelope-o mr-5"></i>test@icloudunlocker.az</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <div class="right-widget pt-5 pb-5">
                                    <ul class="list-inline">
                                        @foreach($__ILLANGUAGES__ as $language)
                                            <li><a href="{{ route('change_language', $language->code) }}"><img src="{{ url('/uploads/'. $language->image ) }}" alt="img"></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-xs-8 col-sm-3">

                                <!-- LOGO -->
                                <div class="site-logo">
                                    <a href="{{ route('index') }}">
                                        <img src="{{ url('/uploads/logo.png') }}" alt="Logo">
                                        <span>iCloud Unlocker</span>
                                    </a>
                                </div>
                                <!-- END LOGO -->

                            </div>
                            <div class="col-xs-4 col-sm-9">

                                <!-- NAVIGATION -->
                                <nav class="site-nav" id="site-nav" role="navigation">
                                    <!-- MOBILE VIEW BUTTON -->
                                    <div class="nav-mobile">
                                        <i class="fa fa-bars show"></i>
                                        <i class="fa fa-close hide"></i>
                                    </div>
                                    <!-- LINKS -->
                                    <ul class="nav-off-canvas">
                                        <!-- ACTIVE ITEM -->
                                        <li class="active"><a href="{{ route('index') }}">@lang('navbar.home')</a></li>
                                        <li><a href="">@lang('navbar.services') <i class="fa fa-angle-down"></i></a>
                                        <ul class="site-sub-menu">

                                            @foreach($__ILCATEGORIES__ as $category)
                                                @php
                                                    $hasChild = false;
                                                    foreach ($__ILCATEGORIES__ as $child) {
                                                        if ($category->id == $child->parent_id) {
                                                            $hasChild = true;
                                                        }
                                                    }
                                                @endphp

                                                @if($category->parent_id == 0)
                                                    <li>
                                                        <a href="{{ $category->slug }}">{{ $category->name }}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>

                                        </li>
                                        <li><a href="">@lang('navbar.track_order')</a></li>
                                        <li><a href="">@lang('navbar.blog')</a></li>
                                        {{--<li><a href="#amazing-features">Features</a></li>--}}
                                        {{--<li><a href="#site-quick-view">Screens</a></li>--}}
                                        {{--<li><a href="#site-download">Download</a></li>--}}
                                        {{--<li><a href="#site-team">Team</a></li>--}}
                                        {{--<li><a href="#site-packages">Pricing</a></li>--}}
                                        <li><a href="#quick-support">@lang('navbar.contact_us')</a></li>

                                    </ul>
                                </nav>
                                <!-- END NAVIGATION -->

                            </div>
                        </div>
                    </div>
                </div>

                @include('client.partial.slider')

            </header>
            <!-- END HEADER -->

        </section>


        <!-- AMAZING FEATURES -->
        <section id="amazing-features" class="site-amazing-features section-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <!-- H1 HEADING -->
                        <h1>@lang('headers.choose')</h1>

                        <div class="row">

                            @foreach($chooses as $choose)
                                <div class="col-xs-12 col-sm-4">

                                    <!-- FEATURE 1 -->
                                    <div class="features move wow fadeInDown" data-wow-duration="1s">
                                        <!-- ICON -->
                                        <figure><span class=""><i class="fa {{ $choose->icon }}"></i></span></figure>
                                        <!-- H5 HEADING -->
                                        <h5>{{ $choose->title }}</h5>
                                        <!-- PARAGRAPH -->
                                        <p>	{!! $choose->text !!}</p>
                                    </div>

                                </div>
                            @endforeach

                            <div class="col-xs-12">

                                <!-- Mobile PICTURE -->
                                <figure class="device wow fadeInUp" data-wow-duration="3s">
                                    <img src="{{ url('/uploads/features-mobile.png') }}" alt="Device">
                                </figure>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT APP -->
        <section id="about-smart" class="site-about-app left-heading section-grey">
            <div class="container">
                <div class="row">
                    @foreach($abouts as $about)
                    <div class="col-xs-12 col-sm-12 col-md-6">

                        <div class="about-half-colom-section">
                            <!-- H1 HEADING -->
                            <h1>@lang('headers.about')</h1>
                            <div class="about-half-colom-section-content">
                                <p>
                                       {!! $about->text !!}
                                </p>

                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="about-half-colom-section-image wow fadeInRight" data-wow-duration="2s">
                            <img src="{{ url('/uploads/'. $about->image ) }}" alt="aboutimage">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- MORE FEATURES -->
        <div class="site-more-features section-blue blue-purple-gredient" id="site-more-features">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <!-- heading -->
                        <h1>@lang('headers.sim_unlock_iphone')</h1>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 ">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
                            <div class="heading-text">
                                <p>@lang('header_sub.sim_unlock_iphone_sub')</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 ">
                        </div>
                    </div>

                    <!-- clearfix -->
                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-md-push-4">

                        <!-- mobile image -->
                        <figure class="featured-img wow fadeInDown" data-wow-duration="2s">
                            <img src="{{ url('/uploads/feature-mobile.png') }}" alt="Image">
                        </figure>
                        <!-- end -->

                    </div>
                    <form action="">

                        <div class="col-xs-12 col-sm-12 col-md-4 col-md-pull-4">


                            <!-- feature 1 -->
                            <div class="feature align-left">
                                <h6>@lang('header_sub.iphone_sim')</h6>

                                    <div class="form-group mb-30">
                                        <div class="styled-select">
                                            <select id="price_select" name="course_select" class="form-control" required="">
                                                <option value="_val">- Select Your Service Type -</option>
                                                @foreach($__ILIPHONESIMS__ as $iphone_sim)
                                                    <option value="{{ $iphone_sim->id }}">{{ $iphone_sim->name , $iphone_sim->price  }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                <p id="service_fee">Price: </p>
                                <p id="service_time">Estimated Delivery Time: </p>
                                
                            </div>


                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 ">

                            <div class="feature align-left move iphone-sim">

                                <div class="form-group">
                                    <input type="number" name="iphone_imei" placeholder="@lang('form_details.imei')" required>
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="iphone_model" placeholder="@lang('form_details.phone_model')">
                                </div>
                                <div class="form-group">
                                    <textarea name="iphone_note" placeholder="@lang('form_details.note')"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="iphone_email" placeholder="@lang('form_details.email')" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="iphone_number" placeholder="@lang('form_details.phone_number')" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="check-button">@lang('form_details.submit')</button>
                                </div>

                            </div>


                        </div>
                    </form>

                </div>

            </div>
        </div>

        <!-- LEFT CONTENT & RIGHT IMAGE -->
        <section id="left-content-section" class="site-amazing-features left-heading two-colom-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6">

                        <div class="half-colom-left-section">
                            <!-- H1 HEADING -->
                            <div class="left-heading-icon wow fadeInLeft" data-wow-duration="2s" > <img src="{{ url('/uploads/design-icon.png') }}" alt="design-icon">
                            </div>
                            <h1>@lang('headers.how_work') </h1>
                            <div class="two-colom-content">
                                <p>
                                    @foreach($how_works as $how_work)
                                        {!! $how_work->text  !!}
                                    @endforeach
                                </p>
                            </div>

                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="half-colom-right-section wow fadeInDown" data-wow-duration="2s">
                            <img src="{{ url('/uploads/right-image1.png') }}" alt="rightimage">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MORE FEATURES -->
        <div class="site-more-features section-blue blue-purple-gredient" id="site-more-features">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        <!-- heading -->
                        <h1>@lang('headers.sim_other')</h1>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 ">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
                            <div class="heading-text">
                                <p>@lang('header_sub.sim_other_sub')</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 ">
                        </div>
                    </div>

                    <!-- clearfix -->
                    <div class="clearfix"></div>

                    <div class="col-xs-12 col-sm-12 col-md-4 col-md-push-4">

                        <!-- mobile image -->
                        <figure class="featured-img wow fadeInDown" data-wow-duration="2s">
                            <img src="{{ url('/uploads/feature-mobile.png') }}" alt="Image">
                        </figure>
                        <!-- end -->

                    </div>
                    <form action="">

                        <div class="col-xs-12 col-sm-12 col-md-4 col-md-pull-4">


                            <!-- feature 1 -->
                            <div class="feature align-left">
                                <h6>@lang('header_sub.iphone_sim')</h6>

                                <div class="form-group mb-30 iphone-sim">
                                    <input type="text" name="service_type" placeholder="Service Type">
                                </div>

                            </div>



                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-4 ">

                            <div class="feature align-left move iphone-sim">

                                <div class="form-group">
                                    <input type="number" name="iphone_imei" placeholder="@lang('form_details.imei')" required>
                                </div>
                                <div class="form-group">
                                    <input type="text"  name="iphone_model" placeholder="@lang('form_details.phone_model')">
                                </div>
                                <div class="form-group">
                                    <textarea name="iphone_note" placeholder="@lang('form_details.note')"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="iphone_email" placeholder="@lang('form_details.email')" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="iphone_number" placeholder="@lang('form_details.phone_number')" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="check-button">@lang('form_details.submit')</button>
                                </div>

                            </div>


                        </div>
                    </form>

                </div>

            </div>
        </div>

        <!-- LEFT IMAGE & RIGHT  CONTENT -->
        <section id="right-content-section" class="site-amazing-features left-heading two-colom-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-push-6">
                        <div class="half-colom-left-section half-colom-padding check-country">
                            <!-- H1 HEADING -->
                            <div class="left-heading-icon wow fadeInRight" data-wow-duration="2s"> <img src="{{ url('/uploads/perfomance-icon.png') }}" alt="perfomanceicon">
                            </div>
                            <h1>@lang('headers.check_country') </h1>
                            <div class="two-colom-content">


                                <form action="">
                                    <ul class="list-inline">
                                        <li class="form-group"><input type="country_email" placeholder="@lang('form_details.email')"></li>
                                        <li class="form-group"><input type="country_number" placeholder="@lang('form_details.imei')"></li>
                                    </ul>
                                    <div class="form-group">
                                        <button class="check-button" type="submit">@lang('form_details.submit')</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6 ">
                        <div class="half-colom-right-section wow fadeInLeft" data-wow-duration="2s">
                            <img src="{{ url('/uploads/left-image1.png') }}" alt="leftimage">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('client.partial.icloud_slider')



        <!-- DOWNLOAD -->
        <section id="site-download" class="site-download section-blue">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <!-- H1 HEADING -->
                        <h1>@lang('headers.download')</h1>
                        <!-- DOWNLOAD ICONS -->
                        <section class="site-download-icons">
                            <div class="align-center">

                                <!-- BUTTON 1 -->
                                <a href="#" class="app-download-icons wow fadeInLeft" data-wow-duration="1s">
                                    <!-- FIGURE -->
                                    <figure><i class="fa fa-mobile"></i></figure>
                                    <!-- h6 heading -->
                                    <h6>Available on the</h6>
                                    <!-- h5 -->
                                    <h5>iOS App Store</h5>
                                </a>

                                <!-- BUTTON 2 -->
                                <a href="#" class="app-download-icons wow fadeInDown" data-wow-duration="2s">
                                    <!-- FIGURE -->
                                    <figure><i class="fa fa-android"></i></figure>
                                    <!-- h6 heading -->
                                    <h6>Available on the</h6>
                                    <!-- h5 -->
                                    <h5>Google Store</h5>
                                </a>

                                <!-- BUTTON 3 -->
                                <a href="#" class="app-download-icons wow fadeInRight" data-wow-duration="3s">
                                    <!-- FIGURE -->
                                    <figure><i class="fa fa-windows adjust"></i></figure>
                                    <!-- h6 heading -->
                                    <h6>Available on the</h6>
                                    <!-- h5 -->
                                    <h5>Windows Store</h5>
                                </a>

                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </section>



        <!-- ACCORDION -->
        <section id="site-accordion" class="site-accordion section-grey left-heading">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="accordian-main">
                            <h1> @lang('headers.faq')</h1>
                            <!-- accordion -->
                            <div class="panel-group" id="accordion">

                                @foreach($faqs as $count => $faq)

                                    <!-- section {{ $count + 1 }} -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title @if( $count + 1 == 2) active @endif">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $count + 1 }}" @if( $count + 1 != 2) class="collapsed" @endif >
                                                        {{ $faq->title }}
                                                        <span>icon</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse{{ $count + 1 }}" class="panel-collapse collapse @if( $count + 1 ==2 ) in @endif">
                                                <div class="panel-body-container">
                                                    <div class="panel-body">
                                                        {!! $faq->text !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                @endforeach

                            </div>
                            <!-- end -->
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-6">

                        <!-- mobile image -->
                        <figure class="accordion-img wow fadeIn" data-wow-duration="3s">
                            <img src="{{ url('/uploads/accordion-image.png') }}" alt="Image">
                        </figure>
                        <!-- end -->

                    </div>
                </div>
            </div>
        </section>


        <!-- STATISTIC -->
        <section class="site-statistic section-white" id="site-statistic">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0">
                        <!-- number -->
                        <div class="site-number">
                            <!-- icon -->
                            <div class="stat-icon"> <img src="{{ url('/uploads/cloud.png') }}" alt="cloud"></div>
                            <!-- h5 heading -->
                            <h5 class="counter-count">@lang('statistic.i_cloud_unlock_rate')</h5>
                            <!-- paragraph -->
                            <p>@lang('statistic.i_cloud_unlock')</p>
                        </div>
                        <!-- end -->
                    </div>
                    <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0">
                        <!-- number -->
                        <div class="site-number">
                            <!-- icon -->
                            <div class="stat-icon"> <img src="{{ url('/uploads/thumbsup.png') }}" alt="thumbsup"></div>
                            <!-- h5 heading -->
                            <h5 class="counter-count">@lang('statistic.sim_unlock_rate')</h5>
                            <!-- paragraph -->
                            <p>@lang('statistic.sim_unlock')</p>
                        </div>
                        <!-- end -->
                    </div>
                    <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0">
                        <!-- number -->
                        <div class="site-number">
                            <!-- icon -->
                            <div class="stat-icon"> <img src="{{ url('/uploads/users.png') }}" alt="users"></div>
                            <!-- h5 heading -->
                            <h5 class="counter-count">@lang('statistic.happy_clients_rate')</h5>
                            <!-- paragraph -->
                            <p>@lang('statistic.happy_clients')</p>
                        </div>
                        <!-- end -->
                    </div>
                    <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-3 col-md-offset-0">
                        <!-- number -->
                        <div class="site-number">
                            <!-- icon -->
                            <div class="stat-icon"> <img src="{{ url('/uploads/star.png') }}" alt="star"></div>
                            <!-- h5 heading -->
                            <h5 class="counter-count">@lang('statistic.best_prices_rate')</h5>
                            <!-- paragraph -->
                            <p>@lang('statistic.best_prices')</p>
                        </div>
                        <!-- end -->
                    </div>

                </div>
            </div>
        </section>

        <!-- TESTIMONIAL -->
        <section class="site-testimonial section-grey" id="site-testimonial">
            <div class="container-fluid wide">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- H1 HEADING -->
                        <h1>@lang('headers.testimonial')</h1>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        </div>

                        <div class="clearfix"> </div>
                        <!-- Slider main container -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                    <div class="swiper-container" id="testimonial-slider">

                                        <!-- Additional required wrapper -->
                                        <ul class="swiper-wrapper">

                                            <!-- slide 1 -->
                                            @foreach($testimonials as $testimonial)
                                                <li class="swiper-slide">
                                                    <div class="swiper-slide-box">
                                                        <!-- image -->
                                                        <figure>
                                                            <img src="{{ url('/uploads/'.$testimonial->image) }}" alt="{{ $testimonial->name }}">
                                                        </figure>
                                                        <!-- user name -->
                                                        <h5>{{ $testimonial->name }}</h5>

                                                        <p>
                                                            {{ $testimonial->feedback }}
                                                        </p>

                                                    </div>
                                                    <div class="swiper-slide-back-box">
                                                    </div>
                                                </li>

                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                </div>
                            </div>
                        </div>

                        <!-- If we need navigation buttons -->
                        <div id="testimonial-prev" class="swiper-button-prev hidden-lg"><span class="icon-play-flip"></span></div>
                        <div id="testimonial-next" class="swiper-button-next hidden-lg"><span class="icon-play"></span></div>

                        <!-- If we need pagination -->
                        <div id="testimonial-paging" class="swiper-pagination"></div>

                    </div>
                </div>
            </div>
        </section>

        <!-- PACKAGES -->
        <section class="site-packages section-blue " id="site-packages">
            <div class="container-fluid">
                <div class="row">
                    <div class="blue-purple-gredient">
                    </div>
                </div>
                <div class="site-packages-inner">
                    <div class="row no-gutter">
                        <div class="col-sm-12">
                            <!-- h1 heading -->
                            <h1>@lang('headers.best_price')</h1>
                        </div>

                        <div class="container">

                            @foreach($best_sellings as $count => $best_selling)

                                @if($count === 0)
                                    <div class="col-xs-12 col-sm-4 col-md-push-4">
                                        <form action="" method="post">
                                        <!-- plan active -->
                                        <div class="box active wow fadeInDown" data-wow-duration="2s">
                                            <div class="price-box-header">
                                                <!-- heading -->
                                                <h4 class="heading">{{ $best_selling->plan }}</h4>
                                                <!-- price -->
                                                <div class="price"><span>$</span>{{ $best_selling->price }}</div>
                                            </div>

                                            <!-- options -->
                                            <ul class="options">
                                                <li><span><i class="fa fa-check"></i> <input type="text" name="phone-name" disabled value="{{ $best_selling->phone }}"></span></li>
                                                <li><span><i class="fa fa-check"></i> Unlimited Downlaod</span></li>
                                                <li><span><i class="fa fa-check"></i> Free One Year Support</span></li>
                                                <li><span><i class="fa fa-check"></i> Free 15GB Linux Hosing</span></li>
                                                <li><span><i class="fa fa-close"></i> 30GB Storage</span></li>
                                                <li><span><i class="fa fa-close"></i> Unlimited Data</span></li>
                                            </ul>
                                            <!-- button -->
                                            <a href="#">Order Now</a>
                                        </div>
                                        </form>
                                        <!-- end -->

                                    </div>
                                    @elseif($count === 1)
                                    <div class="col-xs-12 col-sm-4 col-md-pull-4">

                                        <!-- plan -->
                                        <div class="box left wow fadeInDown" data-wow-duration="1s">
                                            <div class="price-box-header">
                                                <!-- heading -->
                                                <h4 class="heading">{{ $best_selling->plan }}</h4>
                                                <!-- price -->
                                                <div class="price"><span>$</span>{{ $best_selling->price }}</div>
                                            </div>

                                            <!-- options -->
                                            <ul class="options">
                                                <li><span> <i class="fa fa-check"></i> Limited Indtall</span></li>
                                                <li><span> <i class="fa fa-check"></i> Unlimited Downlaod</span></li>
                                                <li><span> <i class="fa fa-check"></i> Free One Year Support</span></li>
                                                <li><span> <i class="fa fa-close"></i> Free 15GB Linux Hosing</span></li>
                                                <li><span> <i class="fa fa-close"></i> 30GB Storage</span></li>
                                            </ul>
                                            <!-- button -->
                                            <a href="#">Order Now</a>
                                        </div>
                                        <!-- end -->

                                    </div>
                                    @else
                                    <div class="col-xs-12 col-sm-4">

                                        <!-- plan -->
                                        <div class="box right wow fadeInDown" data-wow-duration="3s">
                                            <div class="price-box-header">
                                                <!-- heading -->
                                                <h4 class="heading">{{ $best_selling->plan }}</h4>
                                                <!-- price -->
                                                <div class="price"><span>$</span>{{ $best_selling->price }}</div>
                                            </div>

                                            <!-- options -->
                                            <ul class="options">
                                                <li><span><i class="fa fa-check"></i> Limited Indtall</span></li>
                                                <li><span><i class="fa fa-check"></i> Unlimited Downlaod</span></li>
                                                <li><span><i class="fa fa-check"></i> Free One Year Support</span></li>
                                                <li><span><i class="fa fa-check"></i> Free 15GB Linux Hosing</span></li>
                                                <li><span><i class="fa fa-check"></i> 30GB Storage</span></li>
                                            </ul>
                                            <!-- button -->
                                            <a href="#">Order Now</a>
                                        </div>
                                        <!-- end -->

                                    </div>

                                @endif

                            @endforeach





                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- LATEST BLOG -->
        <section class="latest-blog section-grey" id="latest-blog">
            <div class="container-fluid wide">
                <div class="row">
                    <div class="col-xs-12">

                        <!-- H1 HEADING -->
                        <h1>@lang('headers.blog')</h1>

                        @foreach($posts as $post)

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="blog-post-box">
                                    <!--- image -->
                                    <figure> <img src="{{ url('/uploads/'.$post->image) }}" alt="{{ $post->title }}"></figure>
                                    <div class="blog-post-content">
                                        <!--- admin details -->
                                        <!--- title -->
                                        <a href="{{ $post->slug }}">
                                            <h4>{{ $post->title }} </h4>
                                        </a>
                                        <!--- date -->
                                        <span>{{ $post->created_at->formatLocalized('%B %d, %Y') }}</span>
                                        <!--- paragraph -->
                                        <p>{{ $post->short_description }}</p>
                                    </div>
                                </div>
                                <a class="blog-more-button" href="{{ $post->slug }}">@lang('headers.read_more') </a>
                            </div>


                        @endforeach

                    </div>
                </div>
            </div>
        </section>


        <!-- QUICK SUPPORT -->
        <section id="quick-support" class="site-quick-support section-white">
            <div class="container">
                <div class="contact-box blue-purple-gredient">
                    <div class="col-xs-12">
                        <div class="box">

                            <!-- INFO -->
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                <div class="site-info">
                                    <h5> @lang('headers.contact_info')</h5>
                                    <p>@lang('header_sub.contact_info')
                                    </p>

                                    <!-- BOX -->
                                    <a href="tel:+911234567890" class="site-box-row">
                                        <!-- ICON -->
                                        <h6><i class="fa fa-phone"></i> @lang('headers.call') </h6>
                                        <!-- PARAGRAPH -->
                                        <p>+91 123 456 7890</p>
                                    </a>

                                    <!-- BOX -->
                                    <a href="mailto:support@gmail.com" class="site-box-row last">
                                        <!-- ICON -->
                                        <h6><i class="fa fa-envelope"></i> @lang('headers.email')</h6>
                                        <!-- Mail -->
                                        <p>support@gmail.com</p>
                                    </a>

                                    <!-- BOX -->
                                    <a target="_blank" href="http://maps.google.com/?q=Location,125BusinessEvenue,Huston,USA" class="site-box-row">
                                        <!-- ICON -->
                                        <h6><i class="fa fa-map-marker"></i> @lang('headers.location')</h6>
                                        <!-- ADDRESS -->
                                        <address>Location, 125 Business Evenue, Huston, USA</address>
                                    </a>

                                </div>
                            </div>

                            <!-- CONTACT FORM -->
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                <div class="site-info form">
                                    <h5> @lang('headers.message') </h5>
                                    <form action="http://kalanidhithemes.com/live-preview/landing-page/smart-app-landing-page/all-demo/default-version-purple-blue-gredient/php/form.php" method="post" class="site-contact-form" id="myForm">
                                        <label>
                                            <input class="app-btn value-clear" type="text" name="app_name" placeholder="@lang('form_details.name')" required="required" >
                                        </label>

                                        <label>
                                            <input class="app-btn value-clear" type="email" name="app_email" placeholder="@lang('form_details.email')" required="required">
                                        </label>

                                        <label>
                                            <input class="app-btn value-clear" type="tel" name="app_phone" placeholder="@lang('form_details.phone')" required="required">
                                        </label>

                                        <label class="last">
                                            <textarea class="app-btn value-clear" name="app_message" placeholder="@lang('form_details.message')" required></textarea>
                                        </label>

                                        <label class="move">
                                            <button id="form-submit-btn" class="app-btn" type="submit">@lang('form_details.submit') <i class="fa fa-spin fa-spinner"></i></button>
                                        </label>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- FOOTER -->
        <footer class="site-footer section-blue">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <!-- SOCIAL ICONS -->
                        <div class="site-social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                        </div>
                        <!-- END SOCIAL ICONS -->

                        <!-- COPYRIGHT -->
                        <div class="site-copyright">
                            <p>© Copyright {{ date('Y') }} Start. Designed by <a href="https://www.linkedin.com/in/sahibhuseyn/" target="_blank">Sahib Huseynov</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>

    </div>
    <!-- END WRAPPER -->


@endsection