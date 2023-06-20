<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(93699149, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/93699149" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <meta property="og:title" content="ВентТехСервис" />
    <meta property="og:description" content="Устанавливайте вентиляции наивысшего класса" />
    <meta property="og:image" content="storage/items/air.jpg" />
    <meta property="og:url" content="https:venttehservice.ru" />
    <meta name="keywords" content="VentTehService вентиляция оборудование интернетмагазин энергоэффективность качество продажи техническаяподдержка доставка сервис"/>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    {{--    @vite('public/css/app.css')--}}
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/storage/items/logo.png" type="image/png">
</head>
<body class="bg-white min-h-screen flex flex-col">
    @yield('content')
    @include('partials.js')
    @include('partials.https')
</body>
</html>
