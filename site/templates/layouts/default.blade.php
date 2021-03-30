<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@400;700&family=Work+Sans:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://kit.fontawesome.com/da479675e4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <script src="js/wow.min.js"></script>
              <script>
                new WOW().init();
              </script>
    
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <style>
        h1, h2, h3 {
            font-family: 'Oxygen', sans-serif;
            font-weight: 400;
        }

        h1, h2, h3 .font-bold {
            font-family: 'Oxygen', sans-serif;
            font-weight: 700
        }

        p {
            font-family: 'Work Sans', sans-serif;
            font-weight: 400;
        }

        p .font-bold {
            font-family: 'Work Sans', sans-serif;
            font-weight: 500;
        }

        .bg-cover2 {
            background-image: url('/images/bg.svg');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: right;
        }

        .bg-cover3 {
            background-image: url('/images/bg-white.svg');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: right;
        }

        @media only screen and (max-width : 768px) {
            .bg-cover3 {
            background-image: url('/images/bg-white-mobile.svg');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: bottom;
            }   
        }

        @media only screen and (min-width : 1536px) {
            .bg-cover3 {
            background-image: url('/images/bg-white-xl.svg');
            }   
        }

        @media only screen and (max-width : 768px) {
            .bg-cover2 {
            background-image: url('/images/bg-mobile.svg');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: bottom;
            }   
        }

        .swiper-pagination .swiper-pagination-bullet {
            opacity: 1;
            background-color: transparent;
        }
        .swiper-pagination .swiper-pagination-bullet-active {
            background-color: darkgray;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #26336C !important;
            fill: #26336C !important;
            stroke: #26336C !important;
            top: 70%
        }

        .callto strong {
            color: #DF3348;
        }

    </style>

</head>
<body>

@include('partials.navigation')    

@yield('content')

@include('partials.footer')
<script src="{{ mix('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
