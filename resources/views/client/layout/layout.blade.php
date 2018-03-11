<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="App Landing Page">
    <meta name="author" content="">
    <title>I Cloud Unlocker</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!---------------------------------------------------------------------------------------------- STYLESHEETS -->
    <link rel="icon" href="{{ url('/client/logo.png') }}">                                <!-- Browser Tab Icon -->
    <link href="{{ url('/client/css/bootstrap.min.css') }}" rel="stylesheet">                    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('/client/css/font-awesome.min.css') }}">                 <!-- Font-Awesome Icons -->
    <link rel="stylesheet" href="{{ url('/client/css/icomoon.min.css') }}">                      <!-- iconmoon Icons -->
    <link rel="stylesheet" href="{{ url('/client/css/swiper.min.css') }}">                       <!-- Carousel slider -->
    <link rel="stylesheet" href="{{ url('/client/css/style.css') }}">                            <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('/client/css/utility-classes.css') }}">                            <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('/client/css/animate.css') }}">							<!-- Wow Animation CSS -->
    <link rel="stylesheet" href="{{ url('/client/css/google-fonts.css') }}">                     <!-- Google font (Poppins) font face -->
    <link rel="stylesheet" href="{{ url('/client/css/custom-bootstrap-margin-padding.css') }}">  <!-- Custom Bootstrap margin-padding setting -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">		<!-- Google font (Poppins)  -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

@yield('section')


<!-------------------------------------------------------------------------- SCRIPTS -->
<script src="{{ url('/client/js/jquery-1.12.4.min.js') }}"></script>                         <!-- JQuery -->
<script src="{{ url('/client/js/loadingoverlay.min.js') }}"></script>                        <!-- Preloader -->
<script src="{{ url('/client/js/swiper.jquery.min.js') }}"></script>                         <!-- Carousel slider -->
<script src="{{ url('/client/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>        <!-- Custom scroll bar -->
<script src="{{ url('/client/js/modernizr-custom.min.js') }}"></script>                      <!-- Modernizr -->
<script src="{{ url('/client/js/imagesloaded.pkgd.min.js') }}"></script>                     <!-- Header Slider -->
<script src="{{ url('/client/js/hammer.min.js') }}"></script>                                <!-- Header Slider -->
<script src="{{ url('/client/js/sequence.min.js') }}"></script>                              <!-- Header Slider -->
<script src="{{ url('/client/js/jquery.countimator.min.js') }}"></script>                    <!-- Counter -->
<script src="{{ url('/client/js/bootstrap.min.js') }}"></script>                             <!-- Bootstrap -->
<script src="{{ url('/client/js/jquery.sticky.min.js') }}"></script>                         <!-- Sticky Header -->
<script src="{{ url('/client/js/jquery.scrollUp.min.js') }}"></script>                       <!-- scroll top -->
<script src="{{ url('/client/js/style.js') }}"></script>                                     <!-- Template Changeable Plugin Options -->
<script src="{{ url('/client/js/wow.min.js') }}"></script>									<!--Wow animation js -->

<script>
    (function () {
        var courses = $('#price_select');
        courses.bind('change', function () {
            var changed_val = $(this).val();

            $.ajax({
                method: "POST",
                dataType: 'json',
                url: '{{ route('register_price') }}',
                data: {
                    id: changed_val
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                complete: function (data) {
                    var arr = JSON.parse(data.responseText);
                    $('#service_fee').text('Price: ' + arr.price + ' $');
                    $('#service_time').text('Estimated Delivery Time: ' + arr.delivery_time)
                },
                error: function (response) {
                    console.log(response);
                }
            });
        });

    })();
</script>



</body>

</html>
