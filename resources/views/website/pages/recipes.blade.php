@extends('website.layouts.full-width-category')

@section('title',  __('Food Hub') )

@section('content')
    <div class="header-title-breadcrumb relative">
        <div class="header-title-breadcrumb-overlay text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <h1>Категория: {{$category->title}}</h1>
                        <ol class="breadcrumb text-center">
                            <li><a href="/">Главная</a></li>
                            <li class="active">{{$category->title}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <style>
		.recipes_list {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
		}
        .recipes_list > div{
            margin-bottom: 25px;
        }
    </style>
    <div class="high-padding-top col-md-12">
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="display: none">
                    <form method="GET" action="https://foodhub.modeltheme.com/" class="mt-listing-search-taxonomy ">
                        <input type="hidden" name="post_type" value="mt_listing">
                        <div class="checkboxes-categories">
                            <h3 class="checkboxes-categories-title">Search Recipe </h3>
                            <div class="state-search">
                                <input type="search" class="search-field form-control" placeholder="What are you looking for ..." value="" name="s">
                            </div>
                            <div class="select-locations">
                                <select name="mt-listing-category" class="select-car-category form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">';
                                    <option value="">Category</option>
                                    <option value="burgers">Burgers</option>
                                    <option value="drinks">Drinks</option>
                                    <option value="pizzas">Pizzas</option>
                                    <option value="salads">Salads</option>
                                    <option value="seafood">Seafood</option>
                                    <option value="sweets">Sweets</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 280px;"><span class="selection"><span class="select2-selection select2-selection--single"
                                                                                                                                                                          role="combobox" aria-haspopup="true" aria-expanded="false"
                                                                                                                                                                          tabindex="0"
                                                                                                                                                                          aria-labelledby="select2-mt-listing-category-6f-container"><span
                                                    class="select2-selection__rendered" id="select2-mt-listing-category-6f-container" title="Category">Category</span><span class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b><i class="fa fa-angle-down"></i></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <h3 class="checkboxes-categories-title space">Skill Level</h3>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-amenities[]" value="advanced">
                                <span class="checkmark"></span>
                                Advanced </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-amenities[]" value="easy">
                                <span class="checkmark"></span>
                                Easy </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-amenities[]" value="intermediate">
                                <span class="checkmark"></span>
                                Intermediate </label>
                            <h3 class="checkboxes-categories-title space">Cooking Method</h3>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-tags[]" value="baking">
                                <span class="checkmark"></span>
                                Baking </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-tags[]" value="braising">
                                <span class="checkmark"></span>
                                Braising </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-tags[]" value="grilling">
                                <span class="checkmark"></span>
                                Grilling </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-tags[]" value="roasting">
                                <span class="checkmark"></span>
                                Roasting </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-tags[]" value="sauteing">
                                <span class="checkmark"></span>
                                Sautéing </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-tags[]" value="searing">
                                <span class="checkmark"></span>
                                Searing </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-tags[]" value="steaming">
                                <span class="checkmark"></span>
                                Steaming </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-tags[]" value="stewing">
                                <span class="checkmark"></span>
                                Stewing </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-tags[]" value="tossing">
                                <span class="checkmark"></span>
                                Tossing </label>
                            <h3 class="checkboxes-categories-title space">Cuisine</h3>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-category[]" value="american">
                                <span class="checkmark"></span>
                                American </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-category[]" value="asian">
                                <span class="checkmark"></span>
                                Asian </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-category[]" value="indian">
                                <span class="checkmark"></span>
                                Indian </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-category[]" value="italian">
                                <span class="checkmark"></span>
                                Italian </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="mt-listing-category[]" value="spanish">
                                <span class="checkmark"></span>
                                Spanish </label>
                            <br>
                            <br>
                            <div class="state-submit submit">
                                <button type="submit" class="form-control btn btn-success">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 main-content">
                    <div class="row recipes_list">
                    @foreach ($recipes as $item)
                        <div class="col-md-3  single-listing list-view listing-taxonomy-shortcode">
                            <div class="listings_custom">
                                <div class="listing-thumbnail">
                                    <a class="relative" href="{{route('recipes.index',['slug'=>$item->slug])}}">
                                        <img class="listing_post_image"
                                             src="{{$item->getFirstMediaUrl('img', 'thumb')}}"
                                             alt="{{ $item->title }}">
                                    </a>
                                </div>
                                <div class="title-n-categories">
                                    <h3 class="post-name recipe--name">
                                        <a id="data-id-20166"
                                           href="{{route('recipes.index',['slug'=>$item->slug])}}"
                                           title="{{ $item->title }}">{{ $item->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
{{--                        <div class="modeltheme-pagination-holder col-md-12">--}}
{{--                                <div class="modeltheme-pagination pagination">--}}
{{--                                    <nav class="navigation pagination" role="navigation" aria-label="Posts">--}}
{{--                                        <h2 class="screen-reader-text">Posts navigation</h2>--}}
{{--                                        <div class="nav-links"><span aria-current="page" class="page-numbers current">1</span>--}}
{{--                                            <a class="page-numbers" href="https://foodhub.modeltheme.com/cooking-methods/searing/page/2/">2</a>--}}
{{--                                            <span class="page-numbers dots">…</span>--}}
{{--                                            <a class="page-numbers" href="https://foodhub.modeltheme.com/cooking-methods/searing/page/4/">4</a>--}}
{{--                                            <a class="next page-numbers" href="https://foodhub.modeltheme.com/cooking-methods/searing/page/2/">Next</a></div>--}}
{{--                                    </nav> </div>--}}
{{--                            </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection









