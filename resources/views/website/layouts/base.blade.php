<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R7GN2MSR1J"></script>
    <script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-R7GN2MSR1J');
    </script>
    <script data-ad-client="ca-pub-3814238459125339" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3814238459125339"
            crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" href="/assets/img/favicon.png">
    @include('website.SEO.head')
    @include('website._partials.css_head')
    @yield('additional_css')
</head>
<body class="home page-template-default page page-id-17869 theme-foodhub woocommerce-js   widgets_v1   navstyle-v1   footer_row1_off footer_row2_off footer_row3_off   header1 is_header_semitransparent  wpb-js-composer js-comp-ver-6.4.1 vc_responsive">
@yield('layout_content')
@include('website._partials.js_footer')
@yield('additional_js')
</body>
</html>
