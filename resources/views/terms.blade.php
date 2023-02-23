@extends('layouts.home')

@section('page-title')
    {{ __("Terms of Use | iBio") }}
@endsection

@section('content')
    <div class="container w-full py-20 px-5 mx-auto px-5" style="min-height: calc(100vh - 134px)">
        <div class="prose-xl">
            <h1>{{ __("Termos de Uso") }}</h1>
            <p>Ao regristrar-se no Pagefy você aceita automaticamente os termos de uso do serviço.</p>
            <h2>Sobre a sua conta</h2>
            <p>Pagefy é um serviço gratuito e livre para qualquer pessoa criar uma conta e utilizar suas funç±oes, sem restriçoes .</p>
            <p>Você é responsável por qualquer coisa que aconteça com a sua conta, então mantenha seus detalhes de login e senha seguros e não os compartilhe com ninguém. Se você acredita que sua conta foi comprometida, entre em contato conosco imediatamente.</p>
            <h2>Content</h2>
            <p>Tudo o que você posta no Pagefy, incluindo links, textos, vídeos e faixas de música, é considerado conteúdo.</p>
            <p>Você pode usar o Pagefy para publicar seu conteúdo se:</p>
            <ul>
                <li>nenhum do seu conteúdo violará a privacidade, publicidade, propriedade intelectual ou outros direitos de qualquer outra pessoa;</li>
                <li>seu conteúdo não será (i) enganoso ou fraudulento, destinado ou projetado para desinformar, ou provavelmente desinformar uma pessoa razoável, (ii) causar a nós dois a quebrar qualquer lei ou obrigação legal, e (iii) prejudicar nossa reputação ou danificar nossa imagem.</li>
                <li>seu conteúdo não contém nenhum vírus ou outro código, arquivo ou programa prejudicial projetado para interromper ou danificar a funcionalidade da Plataforma ou qualquer outro software, hardware ou dispositivo.</li>
            </ul>
        </div>
    </div>
@endsection
