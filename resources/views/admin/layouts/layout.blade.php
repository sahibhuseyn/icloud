<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>iCloud Unlock - Admin Panel</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:40
    00,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ url('/admin/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ url('/admin/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ url('/admin/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ url('/admin/css/style.min.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ url('admin/css/themes/all-themes.css') }}" rel="stylesheet" />
</head>

<body class="theme-teal">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/dash">iCloud Unlock - Admin Panel</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li {{Request::is('dash') ? "class=active" : ''}}>
                        <a href="/dash">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li {{Request::is('dash/languages') ? "class=active" : ''}}>
                        <a href="{{ route('admin_languages') }}">
                            <i class="material-icons">language</i>
                            <span>Languages</span>
                        </a>
                    </li>
                    <li {{Request::is('dash/translations/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">translate</i>
                            <span>Translations</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__TIFILENAMES__ as $key => $file_name)
                                <li {{ Request::is('dash/translations/' . $file_name->file_name) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/translations/' . $file_name->file_name) ? "class=toggled" : '' }} href="{{ route('admin_translations', $file_name->file_name) }}">{{ $file_name->file_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('slider/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">photo_library</i>
                            <span>Slider</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__TILANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/slider/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/slider/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_slider', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('dash/categories/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Categories</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__TILANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/categories/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/categories/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_categories', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li {{Request::is('dash/posts/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">turned_in</i>
                            <span>Posts</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__TILANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/posts/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/posts/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_posts', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li {{Request::is('dash/testimonials/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">format_size</i>
                            <span>Testimonials</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__TILANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/testimonials/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/testimonials/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_testimonials', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('dash/faqs/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">format_size</i>
                            <span>FAQs</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__TILANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/faqs/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/faqs/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_faqs', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('dash/chooses/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">format_size</i>
                            <span>Why Choose Us</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__TILANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/chooses/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/shooses/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_chooses', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('dash/abouts/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">format_size</i>
                            <span>About us</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__TILANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/abouts/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/abouts/' . $language->code) ? "class=toggled" : '' }} href="{{ route('admin_about', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('dash/iphone-sim-unlock/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">format_size</i>
                            <span>Iphone Sim Unlock</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__TILANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/iphone-sim-unlock/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/iphone-sim-unlock/' . $language->code) ? "class=toggled" : '' }} href="{{ route('iphone-sim-unlock', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('dash/how_works/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">format_size</i>
                            <span>Iphone Sim Unlock</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__TILANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/how_works/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/how_works/' . $language->code) ? "class=toggled" : '' }} href="{{ route('how_works', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li {{Request::is('dash/select_iphone/*') ? "class=active" : ''}}>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">format_size</i>
                            <span>Iphone Slider</span>
                        </a>
                        <ul class="ml-menu">
                            @foreach($__TILANGUAGES__ as $key => $language)
                                <li {{ Request::is('dash/select_iphone/' . $language->code) ? "class=active" : '' }}>
                                    <a {{ Request::is('dash/select_iphone/' . $language->code) ? "class=toggled" : '' }} href="{{ route('select_iphone', $language->code) }}">{{ $language->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        @if (Session::has('success'))
            <div class="container-fluid">
                <div class="alert bg-green alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    {{ Session::get('success') }}
                </div>
            </div>
        @elseif(Session::has('fail'))
            <div class="container-fluid">
                <div class="alert bg-red alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    {{ Session::get('fail') }}
                </div>
            </div>
        @endif
        @yield('content')
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ url('/admin/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ url('/admin/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ url('/admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ url('/admin/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ url('/admin/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ url('/admin/js/admin.js') }}"></script>

    <script>
        $('.add-btn').click(function() {
                var input  = $(this).parent('.button-section').siblings('.col-sm-10').children('.form-group').children('.form-line').children('input[type=text]');
                var inputName = input.attr('name');
                var inputPlace = input.attr('placeholder');

            $(this).parent('.button-section').parent('.add-new-input').append(


                ' <div class="col-sm-10 added-input">' +
                '<div class="form-group">' +
                '<div class="form-line">' +
                '<input type="text" class="form-control" name="' + inputName + '"  placeholder="' + inputPlace +'">' +
                '</div>' +
                '</div>' +
                '</div>'
            );
        });
        $('.remove-btn').click(function() {

            if ($(this).parent('.button-section').parent('.add-new-input')
                    .children('.added-input').length === 0)
            {
                $(this).parent('.button-section').parent('.add-new-input')
                    .children('.col-sm-10').remove()
            }
            else {

                $(this).parent('.button-section').parent('.add-new-input')
                    .children('.added-input').last().remove();
            }
        });
    </script>

    @yield('scripts')
</body>

</html>
