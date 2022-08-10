@extends('website.layouts.full-width-category')

@section('title',  __('Food Hub') )

@section('content')
    <article class="post mt_listing type-mt_listing status-publish has-post-thumbnail hentry
    mt-listing-category-spanish mt-listing-category2-burgers mt-listing-amenities-intermediate mt-listing-tags-baking
    mt-listing-tags-roasting mt-listing-serving-3-servings mt-listing-cooking-time-60-min">
        <div class="single-listing-header">
            <div class="article-details relative text-center">
                <img class="main-featured-image" src="{{$recipe->getFirstMediaUrl('img')}}" alt="{{$recipe->title}}"  style="max-height: 633px;object-fit: cover">
                <div class="header-title-blog text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <div class="header-title-blog-box">
                                    <h1 class="post-title">{{$recipe->title}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="single-listing-info-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 left-info-section">
                        <h3 class="mt_listing_content_heading">Описание</h3>
                        <div class="mt_listing_content_description"><p>{{$recipe->description}}</p></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4 right-info-section">
                        <div class="col-md-12 recipe-info single-recipe-information">
                            <p class="info-recipe recipe-top">
                                <i class="fa fa-folder"></i>
                                Категория
                                <span class="info-aditional">
                                    <a rel="tag">{{$recipe->category->title}}</a>
                                </span>
                            </p>
                            @if($recipe->total_time)
                                <p class="info-recipe">
                                    <i class="fa fa-hourglass-half"></i>
                                    Общ.\актив. время готовки:
                                    <span class="info-aditional">
                                        <a  rel="tag">{{$recipe->total_time}}</a>
                                    </span>
                                </p>
                            @endif
                            @if($recipe->difficulty)
                            <p class="info-recipe">
                                <i class="fa fa-tachometer"></i>
                                Сложность
                                <span class="info-aditional">
                                    <a rel="tag">{{$recipe->difficulty->title}}</a>
                                </span>
                            </p>
                            @endif
                            <p class="info-recipe">
                                <i class="fa fa-cutlery"></i>
                                Количество порций
                                <span class="info-aditional">
                                    <a rel="tag">{{$recipe->yields}}</a>
                                </span>
                            </p>
{{--                            <p class="info-recipe">--}}
{{--                                <i class="fa fa-globe"></i>--}}
{{--                                Кухня--}}
{{--                                <span class="info-aditional">--}}
{{--                                    <a rel="tag">{{$recipe->cuisine->title}}</a>--}}
{{--                                </span>--}}
{{--                            </p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt_listing_header_section">
            <section class="mt-listing-tabs">
                <div class="tabs tabs-style-iconbox">
                    <div class="row">
                        <div class="container">
                            @if($recipe->ingredients)
                                <div class="mt-listing-single-content-section  mt-listing-single-content-section-ingredients">
                                    <h4 class="tab-title">
                                        <img width="35" class="" src="https://foodhub.modeltheme.com/wp-content/themes/foodhub/images/tabs_listing1.png" alt="tabs-image">
                                        <span>Ингредиенты</span>
                                    </h4>
                                    <section id="section-iconbox-1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="ingredient-description">
                                                    Прежде всего, проверьте, есть ли у вас все необходимые ингредиенты для этого рецепта. Обратите внимание на количество!
                                                </div>

                                                <div class="ingredient-description">
                                                    <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                                                        <ul>
                                                            @foreach ($recipe->ingredients as $item)
                                                            <li>
                                                                <input id="ingredient_0" type="checkbox">
                                                                <label for="ingredient_0">{{ $item->amount }} {{ $item->type }} {{ $item->title }}</label>
                                                                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"></svg>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            @endif
                            @if($recipe->steps)
                                <div class="mt-listing-single-content-section  mt-listing-single-content-section-instructions">
                                    <h4 class="tab-title"><img width="35" class="" src="https://foodhub.modeltheme.com/wp-content/themes/foodhub/images/tabs_listing2.png" alt="tabs-image"> <span>Шаги</span></h4>
                                    <section id="section-iconbox-2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="steps-description">
                                                    Затем следуйте инструкциям, чтобы завершить приготовление блюда и, наконец, насладиться им!
                                                </div>
                                                <div class="steps-description">
                                                    <form class="ac-custom ac-list" autocomplete="off">
                                                        <ol>
                                                            @foreach ($recipe->steps as $item)
                                                                <li>
                                                                <input id="instruction_0" type="checkbox">
                                                                <label for="instruction_0">{{$item->text}}</label>
                                                                <ul class="single_instruction_gallery">
                                                                    <li class="single_instruction_gallery_item ">
                                                                        <a class="mt_listing--single-gallery tab2" href="https://foodhub.modeltheme.com/wp-content/uploads/2018/01/blogpost01.jpg">
                                                                            <div class="ico-screenshot">
                                                                                <img width="150" src="{{$item->getFirstMediaUrl('img')}}" alt="Instruction">
                                                                                <div class="flex-zone">
                                                                                    <span class="flex-zone-inside view-image-btn btn"><i class="fa fa-search" aria-hidden="true"></i></span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <svg viewBox="0 0 300 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"></svg>
                                                            </li>
                                                            @endforeach
                                                        </ol>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </div>
{{--        <div class="mt_listing_content_parent">--}}
{{--            <div class="mt_listing_content container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-8 mt_listing_content_section_part">--}}


{{--                        <div class="reviews-section">--}}
{{--                            <h3 class="mt_listing_content_heading">Comments &amp; Reviews</h3>--}}
{{--                            <div id="mt-review-id-20563" class="mt-review-content">--}}
{{--                                <div class="mt-review-image">--}}
{{--                                    <div class="avatar-picture"><img alt="" src="https://secure.gravatar.com/avatar/754c6ee286e3075a18320477d4261baf?s=140&amp;d=mm&amp;r=g"--}}
{{--                                                                     srcset="https://secure.gravatar.com/avatar/754c6ee286e3075a18320477d4261baf?s=280&amp;d=mm&amp;r=g 2x" class="avatar avatar-140 photo" height="140" width="140"--}}
{{--                                                                     loading="lazy"></div>--}}
{{--                                </div>--}}
{{--                                <div class="mt-review-text">--}}
{{--                                    <div class="review-author-name">--}}
{{--<span>--}}
{{--<h4>James Colins</h4>--}}
{{--</span>--}}
{{--                                    </div>--}}
{{--                                    <div id="mt-rating-stars-parent">--}}
{{--                                        <div class="mt-rating-stars"><label>Cost</label>--}}
{{--                                            <ul id="stars">--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="mt-rating-stars"><label>Time</label>--}}
{{--                                            <ul id="stars">--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="mt-rating-stars"><label>Difficulty</label>--}}
{{--                                            <ul id="stars">--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="mt-rating-stars"><label>Overall Review</label>--}}
{{--                                            <ul id="stars">--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                                <li class="star selected"><i class="fa fa-star"></i></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="review-content-paragraph"><p>Add tomatoes, olives and capers to tray. Bake for a further 15 minutes or until fish is cooked through. Sprinkle with extra herbs. Serve with lemon--}}
{{--                                            wedges.</p></div>--}}
{{--                                    <div class="review-date"><span>January 6, 2020</span></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <form id="add-new-review" method="POST" enctype="multipart/form-data" novalidate="novalidate">--}}
{{--                            <div class="succes-message"></div>--}}
{{--                            <h3 id="review-title">Leave a Review</h3>--}}
{{--                            <input type="hidden" name="listing-id" value="20166">--}}
{{--                            <div id="mt-rating-stars-parent">--}}
{{--                                <div class="mt-rating-stars" id="mt-rating-stars-0">--}}
{{--                                    <label>Cost</label>--}}
{{--                                    <ul id="stars">--}}
{{--                                        <li class="star" title="Poor" data-value="1">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="Fair" data-value="2">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="Good" data-value="3">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="Excellent" data-value="4">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="WOW!!!" data-value="5">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <input type="hidden" name="review_star-0" id="review_star" value="">--}}
{{--                                </div>--}}
{{--                                <div class="mt-rating-stars" id="mt-rating-stars-1">--}}
{{--                                    <label>Time</label>--}}
{{--                                    <ul id="stars">--}}
{{--                                        <li class="star" title="Poor" data-value="1">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="Fair" data-value="2">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="Good" data-value="3">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="Excellent" data-value="4">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="WOW!!!" data-value="5">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <input type="hidden" name="review_star-1" id="review_star" value="">--}}
{{--                                </div>--}}
{{--                                <div class="mt-rating-stars" id="mt-rating-stars-2">--}}
{{--                                    <label>Difficulty</label>--}}
{{--                                    <ul id="stars">--}}
{{--                                        <li class="star" title="Poor" data-value="1">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="Fair" data-value="2">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="Good" data-value="3">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="Excellent" data-value="4">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="WOW!!!" data-value="5">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <input type="hidden" name="review_star-2" id="review_star" value="">--}}
{{--                                </div>--}}
{{--                                <div class="mt-rating-stars" id="mt-rating-stars-3">--}}
{{--                                    <label>Overall Review</label>--}}
{{--                                    <ul id="stars">--}}
{{--                                        <li class="star" title="Poor" data-value="1">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="Fair" data-value="2">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="Good" data-value="3">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="Excellent" data-value="4">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                        <li class="star" title="WOW!!!" data-value="5">--}}
{{--                                            <i class="fa fa-star"></i>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    <input type="hidden" name="review_star-3" id="review_star" value="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" name="review_name" value="" placeholder="Name">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="email" class="form-control" name="review_email" value="" placeholder="Email">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" name="review_website" value="" placeholder="Website">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" name="review_title" value="" placeholder="Title of your review">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <textarea class="form-control" placeholder="Comment" name="review_comment"></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <button type="submit" class="button-listing" name="add-review">Submit</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-4 mt_listing_content_sidebar_part">--}}
{{--                        <div class="mt_listing_content_sidebar_part_share">--}}
{{--                            <h3 class="mt_listing_content_heading">Share Recipe</h3>--}}
{{--                            <div class="share-stuff share-links">--}}
{{--                                <ul class="social-share-post c-share-list">--}}
{{--                                    <li class="facebook"><a class="fa fa-facebook" target="_blank" href="https://facebook.com/sharer.php?u=https://foodhub.modeltheme.com/recipe/cheesy-sausage-lasagna-soup/"--}}
{{--                                                            title="Share on Facebook"></a></li>--}}
{{--                                    <li class="twitter"><a class="fa fa-twitter" target="_blank"--}}
{{--                                                           href="https://twitter.com/intent/tweet?text=Cheesy Sausage Lasagna with soup&amp;url=https://foodhub.modeltheme.com/recipe/cheesy-sausage-lasagna-soup/"--}}
{{--                                                           title="Tweet this!"></a></li>--}}
{{--                                    <li class="whatsapp"><a class="fa fa-whatsapp" target="_blank"--}}
{{--                                                            href="https://api.whatsapp.com/send?text=Cheesy Sausage Lasagna with soup%20https://foodhub.modeltheme.com/recipe/cheesy-sausage-lasagna-soup/"--}}
{{--                                                            title="Share on WhatsApp"></a></li>--}}
{{--                                    <li class="pinterest"><a class="fa fa-pinterest" target="_blank"--}}
{{--                                                             href="https://pinterest.com/pin/create/button/?url=https://foodhub.modeltheme.com/recipe/cheesy-sausage-lasagna-soup/&amp;media=https://foodhub.modeltheme.com/wp-content/uploads/2019/01/recipes-21.jpg&amp;description=Cheesy Sausage Lasagna with soup"--}}
{{--                                                             data-pin-do="buttonPin" data-pin-config="beside" data-pin-color="red" data-pin-height="28"></a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mt_listing_content_sidebar_part_rating">--}}


{{--                            <h3 class="mt_listing_content_heading">Current Rating</h3>--}}
{{--                            <div class="mt-reviews-list-info-criteria">--}}
{{--                                <div class="reviews-criteria">--}}
{{--                                    <div class="mt-item-reviews-average-wrapper">--}}
{{--                                        <div class="star5 mt-item-reviews-average-rating ratingValue">5.0</div>--}}
{{--                                        <p>stars</p>--}}
{{--                                        <div class="mt-item-reviews-verbal-description">--}}
{{--                                            <div class="mt-item-reviews-ratings-count">--}}
{{--                                                <div class="mt-reviews-list-info edgtf-reviews-count">--}}
{{--                                                    <p class="mt-reviews-summary">--}}
{{--                                                        <span class="mt-reviews-number">(1</span>--}}
{{--                                                        <span class="mt-reviews-label">review)</span>--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="mt-rating-percentage-wrapper">--}}
{{--                                        <div class="label_text_percentange">--}}
{{--                                            <span class="label_text">Cost</span><span class="label_percentage">100%</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="progress">--}}
{{--                                            <div class="progress-bar progress-bar-success simple" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="label_text_percentange">--}}
{{--                                            <span class="label_text">Time</span><span class="label_percentage">100%</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="progress">--}}
{{--                                            <div class="progress-bar progress-bar-success simple" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="label_text_percentange">--}}
{{--                                            <span class="label_text">Difficulty</span><span class="label_percentage">100%</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="progress">--}}
{{--                                            <div class="progress-bar progress-bar-success simple" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>--}}
{{--                                        </div>--}}
{{--                                        <div class="label_text_percentange">--}}
{{--                                            <span class="label_text">Overall Review</span><span class="label_percentage">100%</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="progress">--}}
{{--                                            <div class="progress-bar progress-bar-success simple" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </article>
@endsection
