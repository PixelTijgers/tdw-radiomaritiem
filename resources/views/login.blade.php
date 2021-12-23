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
    <link href="//db.onlinewebfonts.com/c/247337a1c1af6633c9ed10e68a850825?family=RomainBPTextRegular" rel="stylesheet" type="text/css"/>
    <!-- Admin scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.nav.js') }}"></script>
</head>
<body>

    <main class="mx-auto p-5 sm:max-w-sm md:max-w-md md:mt-14 md:p-0">

        <div class="panel">

            <figure class="flex mb-5">

                <img src="{{ asset('img/logo-radio-mariteam.png') }}" alt="Logo Radio Mariteam" />

            </figure>

        @if (\Session::has('error'))
            <div class="alert items-center bg-red-200 p-2 border-b-2 border-red-300 mb-4">
                <div class="alert-content flex flex-column items-center ml-4">
                    <div class="alert-title font-semibold text-lg text-red-800 mr-1">
                        Fout:
                    </div>
                    <div class="alert-description text-md text-red-600">
                        {!! \Session::get('error') !!}
                    </div>
                </div>
            </div>
        @endif

            <h2 class="flex text-2xl mb-5">Vul je gegevens in</h2>

            <form method="post" action="{{ url('/login') }}">
                @csrf

                <div>
                    <label for="name">Voor- & achternaam:</label>
                    <input type="text" placeholder="Voor- & achternaam" name="name" id="name" required></input>
                </div>

                <div>
                    <label for="email">E-mail adres:</label>
                    <input type="email" placeholder="E-mail adres" name="email" id="email" required></input>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="text-white">Inloggen</button>
                </div>

            </form>

        </div>

    </main>

</body>
</html>
