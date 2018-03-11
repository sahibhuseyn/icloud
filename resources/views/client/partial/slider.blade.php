<!-- START SLIDER -->
<div id="header-slider" class="header-slider blue-purple-gredient">
    <ul class="seq-canvas">

        @foreach($sliders as $count => $slider)

            <!-- SLIDE {{ $count + 1 }} -->


                <li class="step{{ $count + 1 }} slides">

                <!-- MAIN IMAGE -->
                <div class="bg-img" style="background-image: url({{ url('/uploads/'.$slider->image) }})"></div>

                <!-- Caption -->
                <div class="slide-caption">

                    <!-- H1 Heading -->
                    <h1>{{ $slider->header }}</h1>

                    <!-- H2 Heading -->
                    <h2>{{ $slider->title }}</h2>

                    <!-- Paragraph -->
                    <p>
                        {{ $slider->overlay }}
                    </p>

                    <!-- Buttons -->
                    <a href="{{ $slider -> btn_url }}" class="slide-button slide-button-active">{{ $slider -> btn_name }}</a>

                    <!-- Button -->
                    <a href=" {{ $slider -> btn_sec_url }}" class="slide-button">{{ $slider -> btn_sec_name }}</a>

                </div>

            </li>


    @endforeach




    </ul>

    <!-- PAGINATION -->
    <ul class="seq-pagination">

        @foreach($sliders as $count => $slider)

            <li>0{{ $count + 1 }}</li>

        @endforeach
    </ul>

    <!-- NAVIGATION -->
    <button type="button" class="seq-next"><span class="icon-play"></span></button>
    <button type="button" class="seq-prev"><span class="icon-play-flip"></span></button>

</div>