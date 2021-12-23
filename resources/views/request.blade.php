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
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
<main class="mx-auto p-5 mb-16 sm:w-4/5 md:max-w-screen-lg md:mt-14 md:p-0">

    <div class="panel">

        <a href="{{ url()->previous() }}" class="button">Ga terug</a>

        <h3 class="text-4xl mt-16 mb-2">Request</h3>
        <h4 class="text-xl mb-10">Stuur nu je favoriete verzoekplaat door!</h4>

        <form method="post" action="{{ url('/request') }}">
            @csrf

            <div class="sm:flex">

                <div class="sm:w-1/2 sm:mr-2 md:mr-5">
                    <label for="name">Naam:</label>
                    <input type="text" placeholder="Naam" name="name" id="name" required></input>
                </div>

                <div class="sm:w-1/2 sm:ml-2 md:ml-5">
                    <label for="name">Achternaam:</label>
                    <input type="text" placeholder="Achternaam" name="surname" id="surname" required></input>
                </div>

            </div>

            <div class="sm:flex">

                <div class="sm:w-1/2 sm:mr-2 md:mr-5">
                    <label for="name">GSM nummer:</label>
                    <input type="text" placeholder="GSM nummer" name="mobile" id="mobile" required></input>
                </div>

                <div class="sm:w-1/2 sm:ml-2 md:ml-5">
                    <label for="name">E-mail adres:</label>
                    <input type="text" placeholder="E-mail adres" name="email" id="email" required></input>
                </div>

            </div>

            <div>

                <div>
                    <label for="name">Artiest:</label>
                    <input type="text" placeholder="Artiest" name="artist" id="artist" required></input>
                </div>

                <div>
                    <label for="name">Titel:</label>
                    <input type="text" placeholder="Titel" name="song" id="song" required></input>
                </div>

            </div>

            <div>

                <div>
                    <label for="name">Waarom vraag je dit nummer aan?:</label>
                    <textarea placeholder="De reden dat ik dit nummer aanvraag is ..." name="artist" id="artist" required></textarea>
                </div>

                <div class="flex items-center">

                    <label class="switch mb-0 mr-3" for="checkbox">
                        <input type="checkbox" id="checkbox" />
                        <div class="slider round"></div>
                    </label>

                    <div>Ik geef toestemming dat MediaMixer mij opbelt [...]</div>

                </div>

            </div>

            <div class="flex justify-end">
                <button type="submit" class="text-white">Vraag verzoekplaat aan</button>
            </div>

        </form>

    </div>

</main>

</body>
</html>
