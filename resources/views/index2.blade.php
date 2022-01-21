<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--[if IE 7]><html lang="{{ app()->getLocale() }}" class="ie7"><![endif]-->
<!--[if IE 8]><html lang="{{ app()->getLocale() }}" class="ie8"><![endif]-->
<!--[if IE 9]><html lang="{{ app()->getLocale() }}" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><html lang="{{ app()->getLocale() }}"><![endif]-->
<!--[if !IE]><html lang="{{ app()->getLocale() }}"><![endif]-->
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Meta Beschrijving" />
    <meta name="keywords" content="Keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Admin scripts -->
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.nav.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

<main class="mx-auto p-5 mb-16 sm:w-4/5 md:max-w-screen-lg md:mt-14 md:p-0">

    <div class="panel">

        @include('includes.mobile')

        @include('includes.header')

        <div class="flex items-start mt-10" style="position: relative;">

            <div class="w-8/12">

                <div class="embed-container">

                    <iframe src="https://player.vimeo.com/video/668599236?h=a2388f5b02&color=e4022c&title=0&byline=0&portrait=0" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>

                </div>

            </div>

            <div class="w-4/12 h-100" style="position: absolute; right: 0; bottom: 0; top: 0;">

                <iframe src="https://vimeo.com/live-chat/668599236/" width="100%" height="100%" frameborder="0"></iframe>

            </div>

        </div>

        @include('includes.info')

        @include('includes.hosts')

        <div class="scrollTop shadow-lg flex items-center justify-center">
            <span><a href="#"><i class="fas fa-angle-double-up"></i></a></span>
        </div>

    </div>

</main>

@include('includes.footer', [
    'companyName' => env('CLIENT_NAME')
])
</body>
</html>
