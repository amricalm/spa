<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('landing.FlexStart.headers.header')
</head>

<body class="{{ $class ?? '' }}" style="{{ $style ?? '' }}">
    @include('landing.FlexStart.navbars.menus')
    @include('landing.FlexStart.navbars.slider')
    <main id="main">
        @yield('content')
    </main><!-- End #main -->
    @include('landing.FlexStart.footers.footer')
    @php
    $route = Request()->getHttpHost();
    if($route=='kambingku.com')
    {
        echo '<!-- Global site tag (gtag.js) - Google Analytics -->';
        echo '<script async src="https://www.googletagmanager.com/gtag/js?id=G-QX6WSSGQ8V"></script>';
        echo '<script>';
        echo 'window.dataLayer = window.dataLayer || [];';
        echo 'function gtag(){dataLayer.push(arguments);}';
        echo "gtag('js', new Date());";
        echo "gtag('config', 'G-QX6WSSGQ8V')";
        echo '</script>';
    }
    @endphp
</body>

</html>
