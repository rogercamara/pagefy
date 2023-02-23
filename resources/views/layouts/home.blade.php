<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Um link para todas as suas páginas">
    <meta name="keywords" content="Link na bio, link de perfil, links bio, pagina de bio, gerador de links na bio, redes sociais, links de redes sociais, pagina para tiktok, pagina para instagram, links tiktok, links instagram">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="Com o Pagefy você pode criar apenas um link para todas as suas páginas, gratuitamente">
    <meta property="og:image" content="{{ asset('static/favicon/android-chrome-192x192.png') }}">
    @include('extensions.favicon')
    @stack('styles')
</head>
<body class="bg-gray-100 overflow-x-hidden">
    <nav class="bg-white w-full h-16 shadow-sm rounded-b-3xl flex items-center justify-center">
        <div class="container flex items-center justify-between px-5">
            <a href="/"><img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" class="h-10"></a>
            <div class="flex items-center justify-end">
                <a href="{{ route('terms') }}">{{ __("Termos") }}</a>
                <a href="{{ route('policy') }}" class="ml-5">{{ __("Privacidade") }}</a>
                <a href="{{ route('login') }}" class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-primary-600 to-secondary-600 font-normal font-medium text-white transition hover:from-primary-600 hover:to-primary-600 focus:outline-none disabled:opacity-25 px-4 py-2 text-md w-max ml-5">
                    {{ __("Login") }}
                </a>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-primary-900 text-white py-5 flex items-center justify-center h-[70px]">
        <div class="container flex items-center justify-between px-5">
            <div class="flex items-center justify-start">
                <a href="{{ route('terms') }}">{{ __("Termos") }}</a>
                <a href="{{ route('policy') }}" class="ml-5">{{ __("Politica") }}</a>
            </div>
            <div class="flex items-center justify-end">
                <a href="https://github.com/saeedvaziry/ibio" target="_blank" class="transition duration-200 ease-in-out transform hover:scale-125">
                </a>
            </div>
        </div>
    </footer>
    @stack('scripts')
    @include('extensions.google')
    @include('extensions.cookie')
</body>
</html>
