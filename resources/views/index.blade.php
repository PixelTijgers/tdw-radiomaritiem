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
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <!-- Admin scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
</head>
<body>

<main class="mx-auto p-5 mb-16 sm:w-4/5 md:max-w-screen-lg md:mt-14 md:p-0">

    <div class="panel">

        @include('includes.header')

        <div class="flex mt-10 embed-container">

            <iframe src="https://player.castr.com/live_03b2bcc04d5f11eca71cabadb9da9eef" width="590" height="431" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>

        </div>

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

                    <img src="{{ asset('img/bert-van-steenberghe.png') }}" alt="Foto van Bert Van Steenberghe" />

                </figure>

            </div>

            <div class="flex -mt-16">

                <figure class="md:w-4/12 translate-left translate-top">

                    <img src="{{ asset('img/michele-cuvelier.png') }}" alt="Foto van Michèle Cuvelier" />

                </figure>

                <div class="md:w-8/12">

                    <h3 class="md:text-4xl mt-16 mb-5 text-right">Michèle Cuvelier</h3>

                    <p class="md:text-lg text-right">Michèle is radiopresentatrice en bouwde een prachtige carrière op bij Studio Brussel, daar presenteert ze elke weekdag haar eigen programma Fanclub. Zelf is Michèle Beatles-fan van het eerste uur.</p>

                </div>

            </div>

            <div class="flex -mt-16">

                <div class="md:w-8/12">

                    <h3 class="md:text-4xl mt-16 mb-5">Xavier Taveirne</h3>

                    <p class="md:text-lg">Xavier is journalist, presentator, fervent twitteraar en slimste mens. Hij is vooral gekend van Het Journaal en Laat op Eén, toch blijft hij nog steeds gepassioneerd door radio. Naar eigen zeggen schiet hij pas in gang na 2 tassen koffie, dus die staan zeker voor hem klaar bij Radio Mariteam.</p>

                </div>

                <figure class="md:w-4/12 translate-right translate-top">

                    <img src="{{ asset('img/xavier-taveirne.png') }}" alt="Foto van Xavier Taveirne" />

                </figure>

            </div>

            <div class="flex -mt-16">

                <figure class="md:w-4/12 translate-left translate-top">

                    <img src="{{ asset('img/joris-brys.png') }}" alt="Foto van Joris Brys" />

                </figure>

                <div class="md:w-8/12">

                    <h3 class="md:text-4xl mt-16 mb-5 text-right">Joris Brys</h3>

                    <p class="md:text-lg text-right">Joris is radiopresentator en sportjournalist. Zijn stem kennen we van de voormiddagen op Studio Brussel, op tv komen we hem wel eens tegen op Sports Late Night. Hij zet bovendien een treffende Balthazar Boma-immitatie neer.</p>

                </div>

            </div>

            <div class="flex -mt-16">

                <div class="md:w-8/12">

                    <h3 class="md:text-4xl mt-16 mb-5">Dorien Leyers</h3>

                    <p class="md:text-lg">Dorien is presentatrice en moderator met een eindeloze passie voor events en entertainment. Ze presenteerde en modereerde onder andere voor BMW, NN, Umicore en dat doet ze door haar opleiding vloeiend in vier talen.</p>

                </div>

                <figure class="md:w-4/12 translate-right translate-top">

                    <img src="{{ asset('img/dorien-leyers.png') }}" alt="Foto van Dorien Leyers" />

                </figure>

            </div>

            <div class="flex -mt-16">

                <figure class="md:w-4/12 translate-left translate-top">

                    <img src="{{ asset('img/linde-merckpoel.png') }}" alt="Foto van Linde Merckpoel" />

                </figure>

                <div class="md:w-8/12">

                    <h3 class="md:text-4xl mt-16 mb-5 text-right">Linde Merckpoel</h3>

                    <p class="md:text-lg text-right">Linde Merckpoel was radiopresentatrice bij Studio Brussel. Ze waagde zich na een uitgebreide radiocarrière aan het vloggersschap en vlogt er inmiddels op los voor Eén. Intieme interviews zijn haar specialiteit en taboes doorbreekt ze als geen ander.</p>

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
