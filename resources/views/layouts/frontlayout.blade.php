<?php 

$language_id = Session::get('language');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    {{-- <meta content="" name="keywords"> --}}

    {!! SEOMeta::generate() !!}


    <!-- Favicons -->
    <link href="{{ url('frontassets/img/favicon.png') }}" rel="icon">
    <link href="{{ url('frontassets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Summernote CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" />

    <!-- Vendor CSS Files -->
    <link href="{{ url('frontassets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontassets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('frontassets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="http://catalogue-wees.xyz/foundation/public/frontassets/css/variables.css" rel="stylesheet">



    <!-- Template Main CSS File -->
    <link href="{{ url('frontassets/css/main.css') }}" rel="stylesheet">
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                includedLanguages: 'en,fr',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <!-- Style for hide arrows from input type numbers -->
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .goog-te-gadget-simple .goog-te-menu-value {
            padding: 0;
        }

        .goog-te-gadget-simple span,
        .goog-te-gadget-simple img {
            display: inline-block;
        }

        #goog-gt-tt {
            display: none !important;
        }

        .goog-text-highlight {
            background-color: rgb(255, 0, 0, 0) !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        .goog-te-gadget-simple {
            background: transparent !important;
            border: none !important;
        }

        .header{
            background-color: #fff !important;
        }

        #header {
            box-shadow: 0px 2px 15px rgb(18 66 101 / 12%);
        }

    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{ url('/', []) }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="{{ url('frontassets/img/logo.png') }}" alt=""> -->
                <h1>{{trans('middle_east_office.donation')}}<span>.</span></h1>
        </a>

        <nav id="navbar" class="v-navbar navbar navbar-expand-md navbar-light bg-whitez shadow-smz">
        <div class="container">
            {{-- <a class="navbar-brand" href="{{ url(config('forum.web.router.prefix')) }}">Laravel Forum</a> --}}

            <button class="navbar-toggler" type="button" :class="{ collapsed: isCollapsed }" @click="isCollapsed = ! isCollapsed">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" :class="{ show: !isCollapsed }">
                <ul class="navbar-nav me-auto">
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url(config('forum.web.router.prefix')) }}">{{ trans('forum::general.index') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('forum.recent') }}">{{ trans('forum::threads.recent') }}</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('forum.unread') }}">{{ trans('forum::threads.unread_updated') }}</a>
                        </li>
                    @endauth
                    @can ('moveCategories')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('forum.category.manage') }}">{{ trans('forum::general.manage') }}</a>
                        </li>
                    @endcan --}}

                    <li><a class="nav-link scrollto @if (request()->segment(1) == '/') active @endif"
                            href="{{ url('/', []) }}">{{trans('middle_east_office.home')}}</a></li>
                    <li><a class="nav-link scrollto @if (request()->segment(1) == 'social-programs') active @endif"
                            href="{{ url('/social-programs', []) }}">{{trans('middle_east_office.social_programs')}}</a></li>
                    <li><a class="nav-link scrollto  @if (request()->segment(1) == 'contact') active @endif "
                            href="{{ url('/contact', []) }}">{{trans('middle_east_office.donate_physical_items')}}</a></li>
                    <li><a class="nav-link scrollto  @if (request()->segment(1) == 'contact') active @endif"
                            href="{{ url('/contact', []) }}">{{trans('middle_east_office.contact')}}</a></li>
                    {{-- <li><div id="google_translate_element" class="nav-link "></div></li> --}}
                    <li><a class="nav-link scrollto  @if (request()->segment(1) == 'forum') active @endif"
                            href="{{ url('/forum', []) }}">{{trans('middle_east_office.forum')}}</a></li>
                    <li class="language-bar"><a class="nav-linkz scrolltoz @if ($language_id == 'english') activez @endif"
                            href="{{ url('/set-language', ['english']) }}">English</a>|<a class="nav-linkz scrolltoz  @if ($language_id == 'france') activez @endif"
                            href="{{ url('/set-language', ['france']) }}">Français</a></li>
                </ul>
                {{-- <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" @click="isUserDropdownCollapsed = ! isUserDropdownCollapsed">
                                Language (EN)
                            </a>
                            <div class="dropdown-menu" :class="{ show: ! isUserDropdownCollapsed }" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ url('/users/image-upload') }}">
                                    English
                                </a>
                            
                                <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    France
                                </a>
                            </div>
                        </li>
                </ul> --}}

                <ul class="navbar-nav">
                    @if (Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" @click="isUserDropdownCollapsed = ! isUserDropdownCollapsed">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" :class="{ show: ! isUserDropdownCollapsed }" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ url('/users/image-upload') }}">
                                    {{trans('middle_east_office.profile_settings')}}
                                </a>
                                @if(auth()->user()->role == '3')
                                <a class="dropdown-item" href="{{ route('forum.category.manage') }}">{{trans('middle_east_office.manage_categories')}}</a>
                                @endif
                                <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{trans('middle_east_office.log_out')}}
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">{{trans('middle_east_office.log_in')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}">{{trans('middle_east_office.register')}}</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>    

            <!-- <a class="btn-getstarted scrollto" href="index.html#about">Get Started</a> -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-legal text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; {{trans('middle_east_office.copyright')}} <strong><span>{{trans('middle_east_office.donation')}}</span></strong>. {{trans('middle_east_office.all_rights_reserved')}}
                    </div>
                    <div class="credits">
                    </div>
                </div>

                <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ url('frontassets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('frontassets/vendor/aos/aos.js') }}"></script>
    <script src="{{ url('frontassets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('frontassets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('frontassets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('frontassets/js/main.js') }}"></script>
    <script src="https://cdn.kkiapay.me/k.js"></script>
    <script amount="1" position="right" theme="#0095ff" sandbox="true" key="dc0afe70c5a011ec9f03dd4f7afb4463"
        src="https://cdn.kkiapay.me/k.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.23.2/vuedraggable.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js">

    </script>

    <script>
        var pageLink = window.location.href;
        var pageTitle = String(document.title).replace(/\&/g, '%26');

        function fbs_click() {
            window.open(`http://www.facebook.com/sharer.php?u=${pageLink}&quote=${pageTitle}`, 'sharer',
                'toolbar=0,status=0,width=626,height=436');
            return false;
        }

        function tbs_click() {
            window.open(`https://twitter.com/intent/tweet?text=${pageTitle}&url=${pageLink}`, 'sharer',
                'toolbar=0,status=0,width=626,height=436');
            return false;
        }

        function lbs_click() {
            window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${pageLink}`, 'sharer',
                'toolbar=0,status=0,width=626,height=436');
            return false;
        }

        function rbs_click() {
            window.open(`https://www.reddit.com/submit?url=${pageLink}`, 'sharer',
                'toolbar=0,status=0,width=626,height=436');
            return false;
        }

        function pbs_click() {
            window.open(
                `https://www.pinterest.com/pin/create/button/?&text=${pageTitle}&url=${pageLink}&description=${pageTitle}`,
                'sharer', 'toolbar=0,status=0,width=626,height=436');
            return false;
        }


        new Vue({
        el: '.v-navbar',
        name: 'Navbar',
        data: {
            isCollapsed: true,
            isUserDropdownCollapsed: true
        },
        methods: {
            onWindowClick (event) {
                const ignore = ['navbar-toggler', 'navbar-toggler-icon', 'dropdown-toggle'];
                if (ignore.some(className => event.target.classList.contains(className))) return;
                if (! this.isCollapsed) this.isCollapsed = true;
                if (! this.isUserDropdownCollapsed) this.isUserDropdownCollapsed = true;
            }
        },
        created: function () {
            window.addEventListener('click', this.onWindowClick);
        }

        });

        // $('.nav-item.dropdown').hover(function(){
        //     $(this).children('.dropdown-menu').addClass('show');
        //     }, function(){
        //     $(this).children('.dropdown-menu').removeClass('show');
        // });

    </script>
</body>

</html>
