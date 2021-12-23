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
    <!-- Admin scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
</head>
<body>

<main class="mx-auto p-5 mb-16 sm:w-4/5 md:max-w-screen-lg md:mt-14 md:p-0">

    <div class="panel">

        @include('includes.header')

        <div class="flex justify-center mt-16 mb-16">

            <a href="#" class="button" target="_blank">Plaatje aanvragen</a>

        </div>

        <div class="flex flex-col">

            <div class="flex">

                <div class="md:w-8/12">

                    <h3 class="md:text-4xl mt-16 mb-5">Bert Van Steenberghe</h3>

                    <p class="md:text-lg">Bert is radiopresentator bij Studio Brussel, hij voorziet bovendien allerlei Eén-programma’s van zijn warme stem. Wanner Bert DJ’t, bekleedt hij de line up onder de naam “rozeferrari”.</p>

                </div>

                <figure class="md:w-4/12 translate-right translate-top">

                    <img src="{{ asset('img/bert-van-steenberghe.png') }}" alt="Port of antwerp" />

                </figure>

            </div>

            <div class="flex">

                <figure class="md:w-4/12 translate-left translate-top">

                    <img src="{{ asset('img/michele-cuvelier.png') }}" alt="Port of antwerp" />

                </figure>

                <div class="md:w-8/12">

                    <h3 class="md:text-4xl mt-16 mb-5 text-right">Michèle Cuvelier</h3>

                    <p class="md:text-lg text-right">Michèle is radiopresentatrice en bouwde een prachtige carrière op bij Studio Brussel, daar presenteert ze elke weekdag haar eigen programma Fanclub. Zelf is Michèle Beatles-fan van het eerste uur. .</p>

                </div>

            </div>

        </div>

        <div class="flex flex-col">

            <figure class="translate-left image-full">

                <img src="{{ asset('img/port-of-antwerp.jpeg') }}" alt="Port of antwerp" />

            </figure>

            <h3 class="text-4xl mt-10 mb-5">Info</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dignissim cursus laoreet. Phasellus scelerisque lacus ac diam viverra elementum. Donec lacus dui, dictum in sodales quis, tempor sed leo. Integer non metus arcu. Suspendisse vel arcu vitae orci ultricies scelerisque sed id diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi mattis quam sed ex condimentum, eu semper nisi egestas. Duis eu arcu sit amet nisl mollis posuere. Sed elementum pretium ex, eget pharetra nisl vestibulum non. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

            <p>Aenean pretium ante eu diam vehicula, vel volutpat nunc ornare. Etiam imperdiet arcu vitae mattis cursus. Sed elit tellus, vestibulum ac finibus at, bibendum in lorem. Sed quis est vestibulum, tempor sapien sed, mattis mi. Fusce leo purus, posuere in enim eget, posuere iaculis est.</p>

        </div>

    </div>

</main>

@include('includes.footer', [
    'companyName' => env('CLIENT_NAME')
])
</body>
</html>
