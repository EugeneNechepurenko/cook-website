@extends('website.layouts.base')

@section('layout_content')
    <div id="page" class="site">
        @include('website._partials.header')
        <div id="primary" class="no-padding content-area no-sidebar">
            <div class="container-fluid">
                <div class="row">
                    <main id="main" class="col-md-12 site-main main-content">
                        <article id="post-17869" class=" row main-home post-17869 page type-page status-publish hentry">
                            <div class="entry-content">
                                @yield('content')
                            </div>
                            <div class="clearfix"></div>
                        </article>
                    </main>
                </div>
            </div>
        </div>
{{--        <a class="back-to-top modeltheme-is-visible modeltheme-fade-out" href="#0">--}}
{{--            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>--}}
{{--        </a>--}}
        @include('website._partials.footer')
    </div>
@endsection

