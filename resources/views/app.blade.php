<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Um link para todas as suas páginas">
    <meta name="keywords" content="Link na bio, link de perfil, links bio, pagina de bio, gerador de links na bio, redes sociais, links de redes sociais, pagina para tiktok, pagina para instagram, links tiktok, links instagram">
    <title>@yield('page-title')</title>
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="Com o Pagefy você pode criar apenas um link para todas as suas páginas, gratuitamente">
    <meta property="og:image" content="{{ asset('static/favicon/android-chrome-192x192.png') }}">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    @inertiaHead
</head>
<body class="h-full">
    @inertia
    @routes
    @include('extensions.google')
    @include('extensions.cookie')
</body>
</html>
