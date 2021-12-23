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
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

<main class="mx-auto p-5 mb-16 sm:w-4/5 md:max-w-screen-lg md:mt-14 md:p-0">

    <div class="panel">

        <a href="{{ url()->previous() }}" class="button">Ga terug</a>

        <h3 class="md:mt-16 md:mb-3 md:text-5xl">Disclaimer</h3>
        <p>Laatste update: 23 december 2021</p>

        <h4 class="md:mt-5 md:mb-3 md:text-3xl">Interpretaties en definities</h4>

        <h4 class="md:mt-5 md:mb-3 md:text-xl">Interpretaties</h4>

            <p>Etiam id mauris semper, ultrices eros vel, consectetur nunc. Proin elementum ipsum id faucibus sollicitudin. Nullam nec gravida nibh. Nullam fringilla et turpis eu tincidunt. Cras convallis sapien nec ipsum ultricies, in imperdiet ex pulvinar. Praesent commodo metus vel quam porta, eu feugiat orci molestie. Nullam volutpat turpis eget velit semper, at vulputate leo sollicitudin.</p>

        <h4 class="md:mt-5 md:mb-3 md:text-xl">Disclaimer</h4>

            <p>Vivamus dapibus ante sit amet mauris ultricies mollis. Sed urna nisi, placerat in libero vel, rutrum elementum ipsum. Donec maximus ipsum suscipit tortor auctor fringilla. Vestibulum et mattis nibh. In vitae leo ligula. Donec ullamcorper egestas condimentum. Integer eu leo ut eros sagittis volutpat tristique sed enim. Vestibulum ut nisl sit amet urna scelerisque dictum sed id erat. Fusce nec justo ornare, egestas lacus mollis, pretium erat. Pellentesque ut hendrerit ex.</p>

            <p>Nulla nunc lorem, maximus eu venenatis eget, dictum suscipit massa. Duis vitae suscipit arcu, a porta lorem. Nulla consequat sem dui, quis fringilla magna mattis in. Suspendisse suscipit pulvinar leo non venenatis. Nulla vel dignissim ligula. Vivamus at arcu urna. Aliquam quis iaculis lorem, at vehicula tellus. In congue auctor neque, non tincidunt neque lobortis sit amet.</p>

        <h4 class="md:mt-5 md:mb-3 md:text-xl">Externe links disclaimer</h4>

            <p>Duis non dui ac tortor ultrices eleifend eu eget diam. Nunc ultrices convallis euismod. Nulla tristique odio sem, vitae consequat orci dictum ac. Morbi dictum varius odio, eget cursus dolor porta sit amet. Vivamus in tellus diam. Quisque dapibus gravida finibus. Quisque sit amet hendrerit diam. Donec lacinia eget orci pellentesque euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras suscipit est ut porttitor vestibulum. Curabitur a finibus magna. Nullam scelerisque at lacus vitae pulvinar. Maecenas diam sem, dictum non enim eu, viverra iaculis eros.</p>

        <h4 class="md:mt-5 md:mb-3 md:text-xl">Contact</h4>

            <p>Nunc venenatis, sem nec porttitor dictum, est velit interdum elit, vel aliquam urna metus in ante. Nulla eget leo sit amet orci porttitor mattis lobortis ac velit. Aenean pulvinar suscipit nunc id ornare. Quisque vehicula tempus tellus, id convallis ex. Donec pretium, massa at tempus iaculis, ipsum purus malesuada nunc, et consequat sem mauris vel libero. Nunc vehicula mollis volutpat. Nullam facilisis diam a feugiat dignissim. Fusce hendrerit rhoncus lectus non tincidunt.</p>

            <a class="flex mt-5" href="mailto:info@radiomariteam.be">Contacteer ons</a>

    </div>

</main>

@include('includes.footer', [
    'companyName' => env('CLIENT_NAME')
])
</body>
</html>
