<!-- HOW IT WORKS -->
<section class="site-how-it-works section-grey" id="how-it-works">
    <div class="container-fluid wide">
        <div class="row">
            <div class="col-xs-12">

                <!-- H1 HEADING -->
                <h1>@lang('headers.icloud_unlock')</h1>
                <p>@lang('header_sub.icloud_unlock')</p>

                <!-- START SLIDER -->

                <!-- Slider main container -->
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-11 ">
                            <div class="swiper-container" id="how-it-works-slider">
                                <!-- Additional required wrapper -->
                                <ul class="swiper-wrapper">
                                    <!-- Slides -->

                                    @foreach($select_iphones as $select_iphone)

                                        <li class="swiper-slide">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-8">


                                                    <form action="" class="form-horizontal">
                                                        <!-- BOX -->
                                                        <div class="section first">
                                                            <!-- FIGURE -->
                                                            <figure><span class="fa fa-mobile"></span></figure>
                                                            <div class="form-group row">
                                                                <label for="phone_name" class="col-sm-3 col-form-label">@lang('form_details.phone')*</label>
                                                                <input type="text" name="phone" class="col-sm-8" disabled value="{{ $select_iphone->phone_name }}" id="phone_name" name="phone_name">
                                                            </div>

                                                        </div>

                                                        <!-- BOX -->
                                                        <div class="section">
                                                            <!-- FIGURE -->
                                                            <figure><span class="fa fa-barcode"></span></figure>
                                                            <div class="form-group">
                                                                <label for="imei" class="col-sm-3 col-form-label">@lang('form_details.imei')*</label>
                                                                <input type="number" name="imei" id="imei" required class="col-sm-8">
                                                            </div>
                                                        </div>

                                                        <div class="section">
                                                            <!-- FIGURE -->
                                                            <figure><span class="fa fa-envelope"></span></figure>
                                                            <div class="form-group">
                                                                <label for="email" class="col-sm-3 col-form-label">@lang('form_details.email')*</label>
                                                                <input type="email" id="email" name="email" required class="col-sm-8">
                                                            </div>
                                                        </div>
                                                        <div class="section">
                                                            <!-- FIGURE -->
                                                            <figure><span class="fa fa-user"></span></figure>
                                                            <div class="form-group">
                                                                <label for="client_name" class="col-sm-3 col-form-label">@lang('form_details.name')*</label>
                                                                <input type="text" id="client_name" name="client-name" required class="col-sm-8">
                                                            </div>
                                                        </div>

                                                        <!-- BOX -->
                                                        <div class="section">
                                                            <!-- FIGURE -->
                                                            <figure><span class="fa fa-globe"></span></figure>
                                                            <div class="form-group">
                                                                <div class="col-sm-11 ml-15">

                                                                    <select name="service_type_select" class="form-control">
                                                                        <option value="-">- Select Service Type -</option>
                                                                        <option value="Low">Low</option>
                                                                        <option value="Premium">Premium</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 mt-15 mb-15">
                                                                <h5 class="text-left">@lang('header_sub.select_country')</h5>

                                                                <div class="radio-btns ">
                                                                    @php
                                                                        $country_names = explode("_", $select_iphone->country_name);
                                                                        $service_types = explode("_", $select_iphone->service_type);
                                                                        $prices = explode(",", $select_iphone->price);
                                                                        $estimate_days = explode("_", $select_iphone->estimate_day)
                                                                    @endphp


                                                                            <table class="table font-14 text-center table-responsive table-bordered table-hover">
                                                                                <thead class="text-center">
                                                                                <tr class="text-center">
                                                                                    <th>Select</th>
                                                                                    <th>Country</th>
                                                                                    <th>Service type</th>
                                                                                    <th>Estimate time:</th>
                                                                                    <th>Price</th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                @foreach($country_names as $count => $country_name)
                                                                                <tr class="text-center">
                                                                                    <td>
                                                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="{{ @$service_types[$count] }}">
                                                                                    </td>
                                                                                    <td>{{ @$country_name }}</td>
                                                                                    <td>{{ @$service_types[$count] }}</td>
                                                                                    <td>{{ @$estimate_days[$count] }}</td>
                                                                                    <td>{{ @$prices[$count] }}</td>
                                                                                </tr>
                                                                                @endforeach

                                                                                </tbody>
                                                                            </table>
                                                                </div>
                                                            </div>
                                                            <div class="mt-15">
                                                                <label class="row">
                                                                    <div class="col-sm-2">
                                                                        <input type="checkbox" required name="agree">
                                                                    </div>
                                                                    <p class="col-sm-8">
                                                                        @lang('form_details.agree')
                                                                    </p>
                                                                </label>
                                                            </div>

                                                        </div>
                                                        <button class="mb-10" type="submit">@lang('form_details.submit')</button>
                                                    </form>

                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-4">

                                                    <!-- DEVICE -->
                                                    <figure class="device">
                                                        <img src="{{ url('/uploads/'.$select_iphone->image) }}"
                                                             alt="Device">
                                                    </figure>

                                                </div>
                                            </div>
                                        </li>


                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- If we need navigation buttons -->
                <div id="how-it-works-prev" class="swiper-button-prev"><i class="fa fa-angle-up hidden-xs"></i><span class="icon-play-flip visible-xs"></span></div>
                <div id="how-it-works-next" class="swiper-button-next"><i class="fa fa-angle-down hidden-xs"></i><span class="icon-play visible-xs"></span></div>

                <!-- If we need pagination -->
                <div id="how-it-works-paging" class="swiper-pagination"  data-icons='[
                    @for($i=0; $i<count($select_iphones); $i++)
                        "fa fa-mobile" {{ $i === count($select_iphones) - 1 ? '' : ','}}

                    @endfor
                        ]'></div>

            </div>
        </div>
    </div>
</section>