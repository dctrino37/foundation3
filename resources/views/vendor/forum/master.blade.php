<?php 

$language_id = Session::get('language');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEOMeta::generate() !!}

    <title>
        @if (isset($thread_title))
            {{ $thread_title }} —
        @endif
        @if (isset($category))
            {{ $category->title }} —
        @endif
        {{ trans('forum::general.home_title') }}
    </title>

    <!-- Bootstrap (https://github.com/twbs/bootstrap) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Feather icons (https://github.com/feathericons/feather) -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- Vue (https://github.com/vuejs/vue) -->
    @if (config('app.debug'))
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    @else
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    @endif

    <!-- Axios (https://github.com/axios/axios) -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Pickr (https://github.com/Simonwep/pickr) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css">

    <link href="{{ url('frontassets/css/main.css') }}" rel="stylesheet">
    <link href="http://catalogue-wees.xyz/foundation/public/frontassets/css/variables.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>

    <!-- Sortable (https://github.com/SortableJS/Sortable) -->
    <script src="//cdn.jsdelivr.net/npm/sortablejs@1.10.1/Sortable.min.js"></script>
    <!-- Vue.Draggable (https://github.com/SortableJS/Vue.Draggable) -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Vue.Draggable/2.23.2/vuedraggable.umd.min.js"></script>

<style>

    body
    {
        padding: 0;
        background: #f8fafc;
    }

    textarea
    {
        min-height: 200px;
    }

    table tr td
    {
        white-space: nowrap;
    }

    a
    {
        text-decoration: none;
    }

    .deleted
    {
        opacity: 0.65;
    }

    #main
    {
        padding: 2em;
    }

    .shadow-sm
    {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
    }

    .card.category
    {
        margin-bottom: 1em;
    }

    .list-group .list-group
    {
        min-height: 1em;
        margin-top: 1em;
    }

    .btn svg.feather
    {
        width: 16px;
        height: 16px;
        stroke-width: 3px;
        vertical-align: -2px;
    }

    .modal-title svg.feather
    {
        margin-right: .5em;
        vertical-align: -3px;
    }

    .category .subcategories
    {
        background: #fff;
    }

    .category > .list-group-item
    {
        z-index: 1000;
    }

    .category .subcategories .list-group-item:first-child
    {
        border-radius: 0;
    }

    .timestamp
    {
        border-bottom: 1px dotted var(--bs-gray);
        cursor: help;
    }

    .fixed-bottom-right
    {
        position: fixed;
        right: 0;
        bottom: 0;
    }

    .fade-enter-active, .fade-leave-active
    {
        transition: opacity .3s;
    }
    .fade-enter, .fade-leave-to
    {
        opacity: 0;
    }

    .mask
    {
        display: none;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(50, 50, 50, .2);
        opacity: 0;
        transition: opacity .2s ease;
        z-index: 1020;
    }
    .mask.show
    {
        opacity: 1;
    }

    .form-check
    {
        user-select: none;
    }

    .sortable-chosen
    {
        background: var(--bs-light);
    }

    @media (max-width: 575.98px)
    {
        #main
        {
            padding: 1em;
        }
    }

    .header{
            background-color: #fff !important;
        }

    #header{
            box-shadow: 0px 2px 15px rgb(18 66 101 / 12%);
    }

    .forum-container{
        padding: 120px 0 60px !important;

    }

    .d-flex{
        align-items: center;
    }

    .btn{
        font-size: 0.9rem;
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

    <div id="main" class="container forum-container">
        @include('forum::partials.breadcrumbs')
        @include('forum::partials.alerts')

        @yield('content')
    </div>

    <div class="mask"></div>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> --}}

    <script>
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

    const mask = document.querySelector('.mask');

    function findModal (key)
    {
        const modal = document.querySelector(`[data-modal=${key}]`);

        if (! modal) throw `Attempted to open modal '${key}' but no such modal found.`;

        return modal;
    }

    function openModal (modal)
    {
        modal.style.display = 'block';
        mask.style.display = 'block';
        setTimeout(function()
        {
            modal.classList.add('show');
            mask.classList.add('show');
        }, 200);
    }

    document.querySelectorAll('[data-open-modal]').forEach(item =>
    {
        item.addEventListener('click', event =>
        {
            event.preventDefault();

            openModal(findModal(event.currentTarget.dataset.openModal));
        });
    });

    document.querySelectorAll('[data-modal]').forEach(modal =>
    {
        modal.addEventListener('click', event =>
        {
            if (! event.target.hasAttribute('data-close-modal')) return;

            modal.classList.remove('show');
            mask.classList.remove('show');
            setTimeout(function()
            {
                modal.style.display = 'none';
                mask.style.display = 'none';
            }, 200);
        });
    });

    document.querySelectorAll('[data-dismiss]').forEach(item =>
    {
        item.addEventListener('click', event => event.currentTarget.parentElement.style.display = 'none');
    });

    document.addEventListener('DOMContentLoaded', event =>
    {
        const hash = window.location.hash.substr(1);
        if (hash.startsWith('modal='))
        {
            openModal(findModal(hash.replace('modal=','')));
        }

        feather.replace();

        const input = document.querySelector('input[name=color]');

        if (! input) return;

        const pickr = Pickr.create({
            el: '.pickr',
            theme: 'classic',
            default: input.value || null,

            swatches: [
                '{{ config('forum.web.default_category_color') }}',
                '#f44336',
                '#e91e63',
                '#9c27b0',
                '#673ab7',
                '#3f51b5',
                '#2196f3',
                '#03a9f4',
                '#00bcd4',
                '#009688',
                '#4caf50',
                '#8bc34a',
                '#cddc39',
                '#ffeb3b',
                '#ffc107'
            ],

            components: {
                preview: true,
                hue: true,
                interaction: {
                    input: true,
                    save: true
                }
            },

            strings: {
                save: 'Apply'
            }
        });

        pickr
            .on('save', instance => pickr.hide())
            .on('clear', instance =>
            {
                input.value = '';
                input.dispatchEvent(new Event('change'));
            })
            .on('cancel', instance =>
            {
                const selectedColor = instance
                    .getSelectedColor()
                    .toHEXA()
                    .toString();

                input.value = selectedColor;
                input.dispatchEvent(new Event('change'));
            })
            .on('change', (color, instance) =>
            {
                const selectedColor = color
                    .toHEXA()
                    .toString();

                input.value = selectedColor;
                input.dispatchEvent(new Event('change'));
            });
    });

    // $('.nav-item.dropdown').hover(function(){
    //     $(this).children('.dropdown-menu').addClass('show');
    // }, function(){
    //     $(this).children('.dropdown-menu').removeClass('show');
    // });
    </script>
    @yield('footer')
</body>
</html>
