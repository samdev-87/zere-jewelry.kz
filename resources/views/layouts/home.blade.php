<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ZERE - @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- CSS
    ========================= -->
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!--modernizr min js here-->
    <script src="{{ asset('js/vendor/modernizr-3.7.1.min.js') }}"></script>

    <style>
        .nav-link {
            color: inherit;
        }
    </style>
</head>
<body>

<div class="container">
    <header class="border-bottom lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                {{--<a class="link-secondary" href="tel:77071210987">+7 707 121 09 87</a>--}}
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-body-emphasis text-decoration-none" href="{{ route('home.index') }}">
                    <img src="{{ asset('img/logo/logo-b.png') }}" alt="ZERE">
                </a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                         stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                         viewBox="0 0 24 24"><title>Search</title>
                        <circle cx="10.5" cy="10.5" r="7.5"/>
                        <path d="M21 21l-5.2-5.2"/>
                    </svg>
                </a>
                <a class="btn btn-sm link-secondary" href="{{ route('cart.index') }}"><i class="fa fa-shopping-bag"></i></a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-around">
            <a class="nav-item nav-link link-body-emphasis active" href="/">Главная</a>
            <a class="nav-item nav-link link-body-emphasis" href="{{ route('catalog.index') }}">Каталог</a>
            <a class="nav-item nav-link link-body-emphasis" href="{{ route('home.collaboration') }}">Сотрудничетво</a>
            <a class="nav-item nav-link link-body-emphasis" href="{{ route('home.contacts') }}">Контакты</a>
        </nav>
    </div>
</div>

@yield('content')

<!--footer area start-->
<footer class="bg-footer text-white">
    <div class="container mt-5 mb-5 pt-3 pb-3">
        <div class="row">
            <div class="col-3 text-center">
                <img src="{{ asset('img/logo/logo-w.png') }}" alt="ZERE">
                <p>&copy; 2016-2024</p>
            </div>
            <div class="col-6">
                <nav class="nav flex-column text-white-50">
                    <a class="nav-item nav-link active" href="/">Главная</a>
                    <a class="nav-item nav-link" href="{{ route('catalog.index') }}">Каталог</a>
                    <a class="nav-item nav-link" href="{{ route('home.collaboration') }}">Сотрудничетво</a>
                    <a class="nav-item nav-link" href="{{ route('home.contacts') }}">Контакты</a>
                </nav>
            </div>
            <div class="col-3 text-center">
                <a href="tel:77071210987">+7 707 121 09 87</a>
                <div>
                    <a href="#"><i class="fa fa-2x fa-telegram text-white m-2"></i></a>
                    <a href="#"><i class="fa fa-2x fa-whatsapp text-white m-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer area end-->

<!-- JS
============================================ -->

<!-- Plugins JS -->
<!--jquery min js-->
<script src="{{ asset('js/vendor/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/owl.carousel.main.js') }}"></script>
<script src="{{ asset('js/jquery.nice.select.js') }}"></script>
<script src="{{ asset('js/scrollup.js') }}"></script>
<script src="{{ asset('js/ajax.chimp.js') }}"></script>
<script src="{{ asset('js/jquery.ui.js') }}"></script>
<script src="{{ asset('js/jquery.elevatezoom.js') }}"></script>
<script src="{{ asset('js/imagesloaded.js') }}"></script>
<script src="{{ asset('js/isotope.main.js') }}"></script>
<script src="{{ asset('js/jqquery.ripples.js') }}"></script>
<script src="{{ asset('js/jquery.cookie.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
