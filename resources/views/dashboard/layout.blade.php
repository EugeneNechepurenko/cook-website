<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
{{--    <link rel="icon" href="/assets/img/favicon1.png">--}}
    <link href="/assets/img/favicon1.png" rel="shortcut icon" type="image/x-icon">
    <link href="/assets/img/webicon.png" rel="apple-touch-icon">
    @include('dashboard._partials.css_head')
    @yield('additional_css')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('dashboard._partials.navbar')
    @include('dashboard._partials.sidebar')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title')</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>
    @include('dashboard._partials.footer')
    <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
@include('dashboard._partials.js_footer')
@yield('additional_js')
</body>
</html>
