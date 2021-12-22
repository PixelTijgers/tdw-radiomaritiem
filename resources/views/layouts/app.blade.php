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
</head>
<body>
    @include('includes.header', [
        'url' => 'http://www.pixeltijgers.nl',
        'imgSrc' => asset('img/Pixeltijgers-logo.svg'),
        'altTag' => 'Dit is een alt tag'
    ])

    <main class="grid grid-cols-12">

        @include('includes.main', [
            'iframe' => '<iframe src="https://player.castr.com/live_e39448901eb211eb9156194e059d75db" width="590" height="431" frameborder="0" scrolling="no" allow="autoplay" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>',
            'description' => false,
            'title' => 'Naam livestream: Bedrijf',
            'description' => 'In erat augue, pretium id nibh eu, sollicitudin hendrerit est. Ut tempus rutrum aliquet. Nulla tempus nisl at quam ornare euismod. Sed mollis velit at lacinia vulputate. Etiam sit amet ultricies dui, id mollis ipsum. Duis congue sagittis enim vel scelerisque.'
        ])

        @include('includes.aside')

    </main>

    @include('includes.footer', [
        'companyName' => 'Pixeltijgers'
    ])
</body>
</html>
