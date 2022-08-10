
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
{{--    <a href="{{route('dashboard-home')}}" class="brand-link">--}}
{{--        <img src="/assets/img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
{{--        <span class="brand-text font-weight-light">AdminLTE</span>--}}
{{--    </a>--}}

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item"><a href="{{route('dashboard-recipes-all')}}" class="nav-link {{(strpos(Route::currentRouteName(),'dashboard-recipes-') !== false)?'active':''}}"><p>Recipes</p></a></li>
                <li class="nav-item"><a href="{{route('dashboard-category-all')}}" class="nav-link {{(strpos(Route::currentRouteName(),'dashboard-category-') !== false)?'active':''}}"><p>category</p></a></li>
                <li class="nav-item"><a href="{{route('dashboard-cuisine-all')}}" class="nav-link {{(strpos(Route::currentRouteName(),'dashboard-cuisine-') !== false)?'active':''}}"><p>cuisine</p></a></li>
                <li class="nav-item"><a href="{{route('dashboard-difficulty-all')}}" class="nav-link {{(strpos(Route::currentRouteName(),'dashboard-difficulty-') !== false)?'active':''}}"><p>difficulty</p></a></li>
                <li class="nav-item"><a href="{{route('dashboard-ingredient-all')}}" class="nav-link {{(strpos(Route::currentRouteName(),'dashboard-ingredient-') !== false)?'active':''}}"><p>ingredient</p></a></li>
                <li class="nav-item"><a href="{{route('dashboard-tag-all')}}" class="nav-link {{(strpos(Route::currentRouteName(),'dashboard-tag-') !== false)?'active':''}}"><p>tag</p></a></li>
{{--                <li class="nav-item"><a href="{{route('dashboard-users-all')}}" class="nav-link {{(strpos(Route::currentRouteName(),'dashboard-users-') !== false)?'active':''}}"><p>users</p></a></li>--}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>