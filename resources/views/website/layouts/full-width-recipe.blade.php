@extends('website.layouts.base')

@section('layout_content')
        @include('website._partials.header')
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                @yield('content')
            </main>
        </div>
        <a class="back-to-top" href="#0">
            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
        </a>
        @include('website._partials.footer')
@endsection

