<header class="header1">
{{--    <div class="top-header">--}}
{{--        <ul class="top-header-menu">--}}
{{--            <li class="search-header">--}}
{{--                <a href="#" class="mt-search-icon">--}}
{{--                    <i class="fa fa-search" aria-hidden="true"></i>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li class="nav-menu-login nav-menu-account foodhub-logoin"><a href="#" data-modal="modal-log-in" class="modeltheme-trigger"><i class="fa fa-user-plus"></i></a></li>--}}
{{--            <li class="shop_cart_li">--}}
{{--                <a class="shop_cart" href="https://foodhub.modeltheme.com/cart/">--}}
{{--                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>--}}
{{--                </a>--}}
{{--                <div class="header_mini_cart">--}}
{{--                    <div class="widget woocommerce widget_shopping_cart"><h2 class="widgettitle">Cart</h2>--}}
{{--                        <div class="widget_shopping_cart_content">--}}
{{--                            <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class=" nav-menu-list nav-menu-account"><a href="https://foodhub.modeltheme.com/recipe">Submit Recipe</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
    <nav class="navbar navbar-default logo-infos" id="modeltheme-main-head">
        <div class="col-md-12">
            <div class="row">
                <div class="navbar-header col-md-3">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1 class="logo">
                        <a href="{{ route('home.index') }}">
                            <img src="/assets/logo.png" alt="Foodhub">
                        </a>
                    </h1>
                </div>
                <div id="navbar" class="navbar-collapse collapse col-md-9">
                    <ul class="menu nav navbar-nav pull-right nav-effect nav-menu">

                        <li id="menu-item-20320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item menu-item-has-children">
                            <a aria-current="page" style="cursor: pointer">Категории</a>
                            <ul class="sub-menu">
                                @foreach ($menu_categories as $item)
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-17869
{{--                                    current_page_item --}}
                                    menu-item-20483 "><a href="{{route('home.category',['id'=>$item->id])}}" aria-current="page">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li id="menu-item-20320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home  page_item menu-item-has-children
                            {{ (Route::currentRouteName() == 'home.index')?'current-menu-item current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor':'' }}">
                            <a href="{{ route('home.index') }}" aria-current="page">{{ __('Home') }}</a>
                            {{--
                            <ul class="sub-menu">
                                <li id="menu-item-20483" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-17869 current_page_item menu-item-20483 "><a href="https://foodhub.modeltheme.com/" aria-current="page">Main Demo</a></li>
                                <li id="menu-item-20439" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20439 "><a href="https://foodhub.modeltheme.com/vegan-home/">Vegan Home</a></li>
                                <li id="menu-item-20909" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20909 "><a href="https://foodhub.modeltheme.com/slider-home/">Slider Home</a></li>
                            </ul>
--}}
                        </li>
{{--                        <li id="menu-item-18712" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18712 mega3columns mt--mm mega_menu--}}
{{--                            {{ (Route::currentRouteName() == 'recipes.index')?'current-menu-item current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor':'' }}">--}}
{{--                            <a href="{{ route('recipes.index') }}">{{ __('Recipes') }}</a>--}}
{{--                            --}}{{--<div class="cf-mega-menu sub-menu">--}}
{{--                                <div class="vc_row wpb_row vc_row-fluid no-margin vc_custom_1465558944950">--}}
{{--                                    <div class="wpb_column vc_column_container vc_col-sm-3">--}}
{{--                                        <div class="vc_column-inner">--}}
{{--                                            <div class="wpb_wrapper">--}}
{{--                                                <div class="wpb_text_column wpb_content_element ">--}}
{{--                                                    <div class="wpb_wrapper">--}}
{{--                                                        <p><span style="color: #151515; padding-top: 15px; padding-left: 10px; display: block;"><strong>Recipe Pages</strong></span></p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/recipe/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-plus-circle"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Add recipe</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/recipe/classic-vanilla-toffee-cake-with-milk-and-biological-flour-2/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-pencil"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Single Recipe</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/author/oscar_admin/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-user"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Chef's Profile</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/recipes-a-z/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-th-list"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Recipes A-Z</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="wpb_column vc_column_container vc_col-sm-3">--}}
{{--                                        <div class="vc_column-inner">--}}
{{--                                            <div class="wpb_wrapper">--}}
{{--                                                <div class="wpb_text_column wpb_content_element ">--}}
{{--                                                    <div class="wpb_wrapper">--}}
{{--                                                        <p><span style="color: #151515; padding-top: 15px; padding-left: 10px; display: block;"><strong>Recipe Categories</strong></span></p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/categories/sweets/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-cutlery"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Sweets</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/categories/burgers/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-smile-o"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Burgers</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/categories/drinks/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-bolt"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Drinks</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/categories/pizzas/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-coffee"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Pizzas</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="wpb_column vc_column_container vc_col-sm-3">--}}
{{--                                        <div class="vc_column-inner">--}}
{{--                                            <div class="wpb_wrapper">--}}
{{--                                                <div class="wpb_text_column wpb_content_element ">--}}
{{--                                                    <div class="wpb_wrapper">--}}
{{--                                                        <p><span style="color: #151515; padding-top: 15px; padding-left: 10px; display: block;"><strong>Cuisine Categories</strong></span></p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/cuisines/asian/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-child"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Asian</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/cuisines/italian/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-flag-o"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Italian</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/cuisines/spanish/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-soccer-ball-o"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Spanish</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/cuisines/american/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-cab"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">American</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="wpb_column vc_column_container vc_col-sm-3">--}}
{{--                                        <div class="vc_column-inner">--}}
{{--                                            <div class="wpb_wrapper">--}}
{{--                                                <div class="wpb_text_column wpb_content_element ">--}}
{{--                                                    <div class="wpb_wrapper">--}}
{{--                                                        <p><span style="color: #151515; padding-top: 15px; padding-left: 10px; display: block;"><strong>Cooking Methods</strong></span></p>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/cooking-methods/braising/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-desktop"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Braising</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/cooking-methods/baking/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-home"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Baking</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/cooking-methods/grilling/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-map-marker"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Grilling</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="mt-icon-list-item"><a href="https://foodhub.modeltheme.com/cooking-methods/searing/">--}}
{{--                                                        <div class="mt-icon-list-icon-holder">--}}
{{--                                                            <div class="mt-icon-list-icon-holder-inner clearfix"><i style="margin-right:5px; color:#606060;font-size:14px" class="fa fa-recycle"></i></div>--}}
{{--                                                        </div>--}}
{{--                                                        <p class="mt-icon-list-text" style="font-size: 14px; color: #606060"><span class="name">Searing</span><span class="value "></span></p></a></div>--}}
{{--                                                <div class="vc_empty_space" style="height: 15px"><span class="vc_empty_space_inner"></span></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li id="menu-item-18712" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18712 mega3columns mt--mm mega_menu--}}
{{--                            {{ (Route::currentRouteName() == 'drinks.index')?'current-menu-item current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor':'' }}">--}}
{{--                            <a href="{{ route('drinks.index') }}" aria-current="page">{{ __('Drinks') }}</a>--}}
{{--                        </li>--}}
{{--                        <li id="menu-item-19006" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children--}}
{{--                            {{ (Route::currentRouteName() == 'blog.index')?'current-menu-item current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor':'' }}">--}}
{{--                            <a href="{{ route('blog.index') }}">{{ __('Blog') }}</a>--}}
{{--                            --}}{{--<ul class="sub-menu">--}}
{{--                                <li id="menu-item-20319" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20319 "><a href="https://foodhub.modeltheme.com/news/">News Masonry</a></li>--}}
{{--                                <li id="menu-item-20948" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20948 "><a href="https://foodhub.modeltheme.com/posts-and-categories/">Posts and Categories</a></li>--}}
{{--                                <li id="menu-item-19041" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-19041 "><a href="https://foodhub.modeltheme.com/your-favorite-recipe-of-pizza/">Single Post</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        {{--<li id="search-header">
                            <a href="#" class="mt-search-icon">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                        </li>--}}
                        {{--<li id="nav-menu-login" class="nav-menu-account foodhub-logoin">
                            <a href="#" data-modal="modal-log-in" class="modeltheme-trigger">
                                <i class="fa fa-user-plus"></i>
                            </a>
                        </li>--}}
                        {{--<li class="shop_cart_li">
                            <a class="shop_cart" href="https://foodhub.modeltheme.com/cart/">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            </a>

                            <div class="header_mini_cart">
                                <div class="widget woocommerce widget_shopping_cart"><h2 class="widgettitle">Cart</h2>
                                    <div class="widget_shopping_cart_content">

                                        <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>


                                    </div>
                                </div>
                            </div>
                        </li>--}}`
                        {{--
                        <li id="nav-menu-list" class="nav-menu-account"><a href="https://foodhub.modeltheme.com/recipe">Submit Recipe</a></li>
                        --}}
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>