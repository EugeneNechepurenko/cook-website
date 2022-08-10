@extends('website.layouts.base')

@section('layout_content')
    <div id="page" class="site">
        @include('website._partials.header')

        <div class="taxonomy-listing-page term-style2 row">
            @yield('content')
        </div>

        <a class="back-to-top" href="#0">
            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
        </a>
        @include('website._partials.footer')
    </div>
@endsection

