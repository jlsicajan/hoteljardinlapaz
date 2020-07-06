<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="google" content="notranslate">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="google-site-verification" content="nKf0AD5togbokuDltvKt1tjfcmGlC3K0bqHt7XpGxyk"/>


    <link href="//www.google-analytics.com" rel="dns-prefetch">

    <link rel="apple-touch-icon" sizes="57x57" href="/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="alternate" hreflang="it-it" href="https://www.hoteljardinlapaz.com/"/>
    <link rel="alternate" hreflang="en-us" href="https://www.hoteljardinlapaz.com/"/>
    <link rel="alternate" hreflang="fr-fr" href="https://www.hoteljardinlapaz.com/"/>
    <link rel="alternate" hreflang="de-de" href="https://www.hoteljardinlapaz.com/"/>
    <link rel="alternate" hreflang="es-es" href="https://www.hoteljardinlapaz.com/"/>

    <title>Hotel Jardín La Paz</title>
    <meta name="description" content="Hotel Jardin La Paz"/>
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Hotel Jardin La Paz"/>
    <meta property="og:description" content="Hotel Jardin La Paz"/>
    <meta property="og:url" content="https://www.hoteljardinlapaz.com/"/>
    <meta property="og:site_name" content="Hotel Jardin La Paz"/>
    <meta property="og:image" content="https://www.hoteljardinlapaz.com/images/logo/one.png"/>
    <meta property="og:image:secure_url"
          content="https://www.hoteljardinlapaz.com/images/logo/one.png"/>
    <meta property="og:image:width" content="2200"/>
    <meta property="og:image:height" content="1700"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
@yield('content_body')
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/smartphoto.min.js?v=1') }}"></script>
<script>
    window.addEventListener('load',function(){
        new SmartPhoto(".js-img-viwer");
        new SmartPhoto(".js-img-viwer-fit");
    });
    $(document).ready(function(){
        $('.menu_sticky_bar').on('click', function(){
            $('.menu').addClass('d-flex').show().css('z-index', 999);
            $(this).removeClass('d-flex').addClass('d-none').hide().css('z-index', 0);
            $('.menu_sticky_close').removeClass('d-none').addClass('d-flex').show().css('z-index', 1000);

            $('.menu_sticky_reserve').css('z-index', 1000);
        });

        $('.menu_sticky_close').on('click', function(){
            $('.menu').removeClass('d-flex').hide().css('z-index', 0);
            $(this).removeClass('d-flex').addClass('d-none').hide().css('z-index', 0);
            $('.menu_sticky_bar').removeClass('d-none').addClass('d-flex').show().css('z-index', 1000);

            $('.menu_sticky_reserve').css('z-index', 999);
        });

    });
</script>
</body>
</html>
