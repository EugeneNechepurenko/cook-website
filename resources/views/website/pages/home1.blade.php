@extends('website.layouts.full-width')

@section('title',  __('Food Hub') )

@section('content')
    <div data-vc-full-width="true" data-vc-full-width-init="true" class="top_banner_section vc_row wpb_row vc_row-fluid spacing_mobile_40 spacing_tablets_home_search vc_custom_1580822322433 vc_row-has-fill"
       >
        <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner vc_custom_1567671435223">
                <div class="wpb_wrapper">
                    <div class="vc_empty_space  tab-home" style="height: 150px"><span class="vc_empty_space_inner"></span></div>
                    <h1 style="font-size: 40px;color: #ffffff;line-height: 40px;text-align: left;font-family:Cherry Swash;font-weight:700;font-style:normal"
                        class="vc_custom_heading header-mob vc_custom_1580903358171">{{__('It is even better than an expensive cookery book')}}</h1>
                    <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                    <h4 style="font-size: 20px;color: #ffffff;line-height: 20px;text-align: left;font-family:Ubuntu;font-weight:400;font-style:normal" class="vc_custom_heading header-mob vc_custom_1572604905149">
                        {{__('Learn how to make your favorite restaurant’s dishes')}}</h4>
                    <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div>
{{--                    <div class="mt-car-search wow  mtsearchform-style-v2  animated" style="visibility: visible;">--}}
{{--                        <div class="foodhub-header-searchform">--}}
{{--                            <form method="GET" action="https://foodhub.modeltheme.com/" autocomplete="off">--}}
{{--                                <input type="hidden" name="post_type" value="mt_listing">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="slider-state-search col-md-7 ">--}}
{{--                                        <input style="color:#fff;" type="search" class="search-field form-control" placeholder="I want to make..." value="" name="s" id="keyword" onkeyup="fetch()">--}}
{{--                                    </div>--}}
{{--                                    <div class="slider-state-select select-categories col-md-4 ">--}}
{{--                                        <select name="mt-listing-category2" class="select-car-type form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">--}}
{{--                                            <option value="">Categories</option>--}}
{{--                                            <option value="burgers">Burgers</option>--}}
{{--                                            <option value="drinks">Drinks</option>--}}
{{--                                            <option value="pizzas">Pizzas</option>--}}
{{--                                            <option value="salads">Salads</option>--}}
{{--                                            <option value="seafood">Seafood</option>--}}
{{--                                            <option value="sweets">Sweets</option>--}}
{{--                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 181.656px;"><span class="selection"><span--}}
{{--                                                        class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"--}}
{{--                                                        aria-labelledby="select2-mt-listing-category2-ic-container"><span class="select2-selection__rendered" id="select2-mt-listing-category2-ic-container"--}}
{{--                                                                                                                          title="Categories">Categories</span><span class="select2-selection__arrow"--}}
{{--                                                                                                                                                                    role="presentation"><b role="presentation"></b><i--}}
{{--                                                                class="fa fa-angle-down"></i></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="slider-state-submit col-md-1  submit">--}}
{{--                                        <button type="submit" class="form-control btn btn-warning"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                            <div id="datafetch"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="vc_empty_space" style="height: 140px"><span class="vc_empty_space_inner"></span></div>
                </div>
            </div>
        </div>
        <div class="right-image-slide wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner vc_custom_1579008276930">
                <div class="wpb_wrapper"></div>
            </div>
        </div>
    </div>

    <div class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_custom_1571038539222 wpb_start_animation animated">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="title-subtile-holder animateIn text_center animated no_animation" data-animate="no_animation" style="opacity: 100;"><h1 style="color: #3a3a3a;" class="section-title custom_color">
                            Recipes by Category</h1>
                        <p style="color: #808080;" class="section-subtitle custom_color">Excepteur sint occaecat cupidatat non qui proident, sunt culpa qui officia deserunmollit anim id est laborum.</p></div>
                    <div class="vc_empty_space" style="height: 45px"><span class="vc_empty_space_inner"></span></div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1545063501314">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="listings_category_image_shortcode">
                                        <div class="listings_category_image_shortcode_holder"><a href="https://foodhub.modeltheme.com/categories/sweets"><img class="cat-image" alt="sweets"
                                                                                                                                                              src="https://foodhub.modeltheme.com/wp-content/uploads/2020/01/sweets_categ-400x500.jpg"></a>
                                            <div class="listings_category_footer"><h4 class="heading"><a href="https://foodhub.modeltheme.com/categories/sweets">Sweets</a></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="listings_category_image_shortcode">
                                        <div class="listings_category_image_shortcode_holder"><a href="https://foodhub.modeltheme.com/categories/burgers"><img class="cat-image" alt="burgers"
                                                                                                                                                               src="https://foodhub.modeltheme.com/wp-content/uploads/2020/01/burger_categ-400x500.jpg"></a>
                                            <div class="listings_category_footer"><h4 class="heading"><a href="https://foodhub.modeltheme.com/categories/burgers">Burgers</a></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="listings_category_image_shortcode">
                                        <div class="listings_category_image_shortcode_holder"><a href="https://foodhub.modeltheme.com/categories/drinks"><img class="cat-image" alt="drinks"
                                                                                                                                                              src="https://foodhub.modeltheme.com/wp-content/uploads/2020/01/drinks_categ-400x500.jpg"></a>
                                            <div class="listings_category_footer"><h4 class="heading"><a href="https://foodhub.modeltheme.com/categories/drinks">Drinks</a></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="listings_category_image_shortcode">
                                        <div class="listings_category_image_shortcode_holder"><a href="https://foodhub.modeltheme.com/categories/pizzas"><img class="cat-image" alt="pizzas"
                                                                                                                                                              src="https://foodhub.modeltheme.com/wp-content/uploads/2020/01/pizza_categ-400x500.jpg"></a>
                                            <div class="listings_category_footer"><h4 class="heading"><a href="https://foodhub.modeltheme.com/categories/pizzas">Pizzas</a></h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_custom_1580822018446 vc_row-has-fill"
         style="position: relative; left: -302.5px; box-sizing: border-box; width: 1775px; padding-left: 302.5px; padding-right: 302.5px;">
        <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <h1 style="text-align: left; font-size-40px; line-height: normal !important;"><span style="color: #ffffff;">Subscribe to our Newsletter</span></h1>
                        </div>
                    </div>
                    <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                    <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                            <p style="font-size: 18px; padding-top: 5px; text-align: left;"><span style="color: #ffffff;">Fusce id velit placerat, efficitur libero placerat, sodales ante. Curabitur sed erosat orci congue vestibulum.</span>
                            </p>
                        </div>
                    </div>
                    <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                    <div class="text-left modeltheme_button wow no_animation" style="visibility: hidden; animation-name: none;"><a href="" class="button-winona btn btn-medium btn_custom_626455727c229"
                                                                                                                                   style="color:#ffffff;background: #518f2d ;">Subscribe</a></div>
                </div>
            </div>
        </div>
        <div class="button-left wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner">
                <div class="wpb_wrapper"></div>
            </div>
        </div>
    </div>

    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1580290639624"
         style="position: relative; left: -302.5px; box-sizing: border-box; width: 1775px; padding-left: 302.5px; padding-right: 302.5px;">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="title-subtile-holder  animateIn text_center" data-animate="fadeIn" style="opacity: 100;"><h1 style="color: #151515;" class="section-title custom_color">Most Popular Recipes</h1>
                        <p style="color: #808080;" class="section-subtitle custom_color">Excepteur sint occaecat cupidatat non qui proident, sunt culpa qui officia deserunmollit anim id est laborum.</p></div>
                    <div class="vc_empty_space" style="height: 45px"><span class="vc_empty_space_inner"></span></div>
                    <div class="row">
                        <div class="shortcode-listings-slider wow fadeIn listings-container-4  owl-carousel owl-theme" style="visibility: hidden; animation-name: none; opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 3516px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                    <div class="owl-item" style="width: 293px;">
                                        <div class="single-listing list-view">
                                            <div class="listings_custom  col-md-12 ">
                                                <div class="listing-thumbnail ">
                                                    <a class="relative" href="https://foodhub.modeltheme.com/recipe/chocolate-cake-with-cookies-in-glaze/"><img class="listing_post_image"
                                                                                                                                                                src="https://foodhub.modeltheme.com/wp-content/uploads/2019/12/homemade-chocolate-cake-1-500x500.jpg"
                                                                                                                                                                alt="Chocolate Cake Cookies in Glaze"></a>
                                                    <div class="listing-star">
                                                        <div class="star5 mt-item-reviews-average-rating ratingValue">5.0</div>
                                                    </div>
                                                </div>
                                                <div class="title-n-categories">
                                                    <h4 class="post-name">
                                                        <a href="https://foodhub.modeltheme.com/recipe/chocolate-cake-with-cookies-in-glaze/" title="Chocolate Cake Cookies in Glaze">Chocolate Cake Cookies in
                                                            Glaze</a>
                                                    </h4>
                                                    <div class="categories-name">
                                                        <svg height="15px" viewBox="0 -9 512.00282 512" width="15px" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="m404.015625 45.144531c-16.628906-2.152343-33.242187-.871093-49.503906 3.8125-23.332031-30.78125-59.683594-48.957031-98.515625-48.957031-38.832032 0-75.183594 18.1875-98.515625 48.957031-16.261719-4.667969-32.875-5.957031-49.503907-3.8125-61.035156 7.910157-107.453124 60.144531-107.97265575 121.503907-.48437525 57.40625 38.02343775 107.175781 93.64453175 121.019531 13.207031 3.28125 22.949218 14.589843 24.238281 28.140625l7.398437 77.710937h-.007812l4.230468 44.394531c1.796876 18.941407 25.773438 31.945313 35.855469 36.605469 1.441407.664063 2.597657 1.15625 3.363281 1.476563 27.738282 11.675781 57.503907 17.511718 87.269532 17.511718 29.757812 0 59.496094-5.835937 87.191406-17.496093 6.195312-2.558594 37.207031-16.453125 39.273438-38.097657l4.230468-44.394531h-.011718l7.398437-77.710937c1.289063-13.550782 11.035156-24.859375 24.242187-28.140625 55.648438-13.851563 94.164063-63.613281 93.679688-121.019531-.535156-61.359376-46.949219-113.59375-107.984375-121.503907zm-67.617187 414.582031c-51.105469 21.519532-109.71875 21.53125-160.859376-.019531-11.007812-4.589843-27.664062-15.21875-28.449218-23.464843l-1.09375-11.457032c34.914062 16.878906 71.832031 25.425782 109.992187 25.425782 38.160157 0 75.078125-8.546876 109.992188-25.425782l-1.09375 11.457032c-.769531 8.246093-17.4375 18.882812-28.488281 23.484374zm77.679687-189.203124c-20.453125 5.09375-35.546875 22.625-37.550781 43.605468l-8.546875 89.707032c-35.34375 18.988281-72.984375 28.707031-111.984375 28.707031s-76.640625-9.71875-111.988282-28.707031l-8.542968-89.707032c-2.003906-20.988281-17.097656-38.511718-37.550782-43.605468-47.671874-11.863282-80.675781-54.519532-80.261718-103.726563.449218-52.59375 40.253906-97.355469 92.59375-104.136719 4.449218-.574218 8.90625-.875 13.355468-.875 11.589844 0 23.136719 1.960938 34.453126 5.855469l6.390624 2.199219 3.796876-5.597656c19.765624-29.15625 52.570312-46.582032 87.753906-46.582032 35.1875 0 67.992187 17.425782 87.757812 46.589844l3.792969 5.597656 6.394531-2.199218c15.660156-5.386719 31.742188-7.0625 47.808594-4.980469 52.328125 6.773437 92.140625 51.539062 92.59375 104.132812.410156 49.210938-32.59375 91.867188-80.265625 103.722657zm0 0"></path>
                                                            <path d="m166.625 300.210938c-4.835938.597656-8.269531 5.015624-7.660156 9.851562l8.828125 70.621094c.554687 4.464844 4.359375 7.730468 8.746093 7.730468.371094 0 .734376-.027343 1.101563-.070312 4.839844-.597656 8.273437-5.015625 7.664063-9.851562l-8.828126-70.621094c-.609374-4.84375-5.066406-8.21875-9.851562-7.660156zm0 0"></path>
                                                            <path d="m229.511719 317.796875c-4.871094 0-8.828125 3.945313-8.828125 8.828125v70.621094c0 4.878906 3.957031 8.824218 8.828125 8.824218 4.875 0 8.828125-3.945312 8.828125-8.824218v-70.621094c0-4.882812-3.953125-8.828125-8.828125-8.828125zm0 0"></path>
                                                            <path d="m345.367188 300.210938c-4.792969-.558594-9.25 2.816406-9.851563 7.660156l-8.828125 70.621094c-.601562 4.839843 2.824219 9.253906 7.660156 9.851562.371094.042969.742188.070312 1.105469.070312 4.386719 0 8.191406-3.265624 8.746094-7.730468l8.828125-70.621094c.609375-4.835938-2.824219-9.253906-7.660156-9.851562zm0 0"></path>
                                                            <path d="m282.476562 317.796875c-4.871093 0-8.828124 3.945313-8.828124 8.828125v70.621094c0 4.878906 3.957031 8.824218 8.828124 8.824218 4.875 0 8.828126-3.945312 8.828126-8.824218v-70.621094c0-4.882812-3.953126-8.828125-8.828126-8.828125zm0 0"></path>
                                                            <path d="m141.335938 88.277344c-73.695313-.625-88.039063 59.296875-88.164063 59.90625-1.050781 4.757812 1.96875 9.460937 6.726563 10.503906.636718.140625 1.28125.203125 1.898437.203125 4.054687 0 7.714844-2.808594 8.617187-6.9375.105469-.46875 10.691407-47.042969 70.734376-46.027344 4.722656-.328125 8.871093-3.867187 8.925781-8.730469.050781-4.867187-3.867188-8.863281-8.738281-8.917968zm0 0"></path>
                                                            <path d="m206.464844 54.804688c-3.859375 2.980468-4.574219 8.527343-1.589844 12.382812 2.976562 3.859375 8.527344 4.554688 12.382812 1.597656.363282-.292968 37.269532-28.089844 77.824219.238282 1.535157 1.078124 3.304688 1.597656 5.050781 1.597656 2.789063 0 5.523438-1.316406 7.246094-3.777344 2.789063-3.992188 1.820313-9.5-2.179687-12.289062-40.878907-28.539063-82.457031-12.304688-98.734375.25zm0 0"></path>
                                                        </svg>
                                                        <a href="https://foodhub.modeltheme.com/author/demo_user/">Demo User</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 293px;">
                                        <div class="single-listing list-view">
                                            <div class="listings_custom  col-md-12 ">
                                                <div class="listing-thumbnail ">
                                                    <a class="relative" href="https://foodhub.modeltheme.com/recipe/beef-massaman-soup/"><img class="listing_post_image"
                                                                                                                                              src="https://foodhub.modeltheme.com/wp-content/uploads/2019/11/recipe_massaman_soup-1-500x500.jpg"
                                                                                                                                              alt="Beef Massaman Soup Marroc Style"></a>
                                                    <div class="listing-star">
                                                        <div class="star5 mt-item-reviews-average-rating ratingValue">5.0</div>
                                                    </div>
                                                </div>
                                                <div class="title-n-categories">
                                                    <h4 class="post-name">
                                                        <a href="https://foodhub.modeltheme.com/recipe/beef-massaman-soup/" title="Beef Massaman Soup Marroc Style">Beef Massaman Soup Marroc Style</a>
                                                    </h4>
                                                    <div class="categories-name">
                                                        <svg height="15px" viewBox="0 -9 512.00282 512" width="15px" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="m404.015625 45.144531c-16.628906-2.152343-33.242187-.871093-49.503906 3.8125-23.332031-30.78125-59.683594-48.957031-98.515625-48.957031-38.832032 0-75.183594 18.1875-98.515625 48.957031-16.261719-4.667969-32.875-5.957031-49.503907-3.8125-61.035156 7.910157-107.453124 60.144531-107.97265575 121.503907-.48437525 57.40625 38.02343775 107.175781 93.64453175 121.019531 13.207031 3.28125 22.949218 14.589843 24.238281 28.140625l7.398437 77.710937h-.007812l4.230468 44.394531c1.796876 18.941407 25.773438 31.945313 35.855469 36.605469 1.441407.664063 2.597657 1.15625 3.363281 1.476563 27.738282 11.675781 57.503907 17.511718 87.269532 17.511718 29.757812 0 59.496094-5.835937 87.191406-17.496093 6.195312-2.558594 37.207031-16.453125 39.273438-38.097657l4.230468-44.394531h-.011718l7.398437-77.710937c1.289063-13.550782 11.035156-24.859375 24.242187-28.140625 55.648438-13.851563 94.164063-63.613281 93.679688-121.019531-.535156-61.359376-46.949219-113.59375-107.984375-121.503907zm-67.617187 414.582031c-51.105469 21.519532-109.71875 21.53125-160.859376-.019531-11.007812-4.589843-27.664062-15.21875-28.449218-23.464843l-1.09375-11.457032c34.914062 16.878906 71.832031 25.425782 109.992187 25.425782 38.160157 0 75.078125-8.546876 109.992188-25.425782l-1.09375 11.457032c-.769531 8.246093-17.4375 18.882812-28.488281 23.484374zm77.679687-189.203124c-20.453125 5.09375-35.546875 22.625-37.550781 43.605468l-8.546875 89.707032c-35.34375 18.988281-72.984375 28.707031-111.984375 28.707031s-76.640625-9.71875-111.988282-28.707031l-8.542968-89.707032c-2.003906-20.988281-17.097656-38.511718-37.550782-43.605468-47.671874-11.863282-80.675781-54.519532-80.261718-103.726563.449218-52.59375 40.253906-97.355469 92.59375-104.136719 4.449218-.574218 8.90625-.875 13.355468-.875 11.589844 0 23.136719 1.960938 34.453126 5.855469l6.390624 2.199219 3.796876-5.597656c19.765624-29.15625 52.570312-46.582032 87.753906-46.582032 35.1875 0 67.992187 17.425782 87.757812 46.589844l3.792969 5.597656 6.394531-2.199218c15.660156-5.386719 31.742188-7.0625 47.808594-4.980469 52.328125 6.773437 92.140625 51.539062 92.59375 104.132812.410156 49.210938-32.59375 91.867188-80.265625 103.722657zm0 0"></path>
                                                            <path d="m166.625 300.210938c-4.835938.597656-8.269531 5.015624-7.660156 9.851562l8.828125 70.621094c.554687 4.464844 4.359375 7.730468 8.746093 7.730468.371094 0 .734376-.027343 1.101563-.070312 4.839844-.597656 8.273437-5.015625 7.664063-9.851562l-8.828126-70.621094c-.609374-4.84375-5.066406-8.21875-9.851562-7.660156zm0 0"></path>
                                                            <path d="m229.511719 317.796875c-4.871094 0-8.828125 3.945313-8.828125 8.828125v70.621094c0 4.878906 3.957031 8.824218 8.828125 8.824218 4.875 0 8.828125-3.945312 8.828125-8.824218v-70.621094c0-4.882812-3.953125-8.828125-8.828125-8.828125zm0 0"></path>
                                                            <path d="m345.367188 300.210938c-4.792969-.558594-9.25 2.816406-9.851563 7.660156l-8.828125 70.621094c-.601562 4.839843 2.824219 9.253906 7.660156 9.851562.371094.042969.742188.070312 1.105469.070312 4.386719 0 8.191406-3.265624 8.746094-7.730468l8.828125-70.621094c.609375-4.835938-2.824219-9.253906-7.660156-9.851562zm0 0"></path>
                                                            <path d="m282.476562 317.796875c-4.871093 0-8.828124 3.945313-8.828124 8.828125v70.621094c0 4.878906 3.957031 8.824218 8.828124 8.824218 4.875 0 8.828126-3.945312 8.828126-8.824218v-70.621094c0-4.882812-3.953126-8.828125-8.828126-8.828125zm0 0"></path>
                                                            <path d="m141.335938 88.277344c-73.695313-.625-88.039063 59.296875-88.164063 59.90625-1.050781 4.757812 1.96875 9.460937 6.726563 10.503906.636718.140625 1.28125.203125 1.898437.203125 4.054687 0 7.714844-2.808594 8.617187-6.9375.105469-.46875 10.691407-47.042969 70.734376-46.027344 4.722656-.328125 8.871093-3.867187 8.925781-8.730469.050781-4.867187-3.867188-8.863281-8.738281-8.917968zm0 0"></path>
                                                            <path d="m206.464844 54.804688c-3.859375 2.980468-4.574219 8.527343-1.589844 12.382812 2.976562 3.859375 8.527344 4.554688 12.382812 1.597656.363282-.292968 37.269532-28.089844 77.824219.238282 1.535157 1.078124 3.304688 1.597656 5.050781 1.597656 2.789063 0 5.523438-1.316406 7.246094-3.777344 2.789063-3.992188 1.820313-9.5-2.179687-12.289062-40.878907-28.539063-82.457031-12.304688-98.734375.25zm0 0"></path>
                                                        </svg>
                                                        <a href="https://foodhub.modeltheme.com/author/oscar_admin/">James Colins</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 293px;">
                                        <div class="single-listing list-view">
                                            <div class="listings_custom  col-md-12 ">
                                                <div class="listing-thumbnail ">
                                                    <a class="relative" href="https://foodhub.modeltheme.com/recipe/bbq-lobster-with-corn-and-ginger-butter/"><img class="listing_post_image"
                                                                                                                                                                   src="https://foodhub.modeltheme.com/wp-content/uploads/2019/11/recipe_lobster_author-1-500x500.jpg"
                                                                                                                                                                   alt="BBQ lobster ginger butter with patatoes"></a>
                                                    <div class="listing-star">
                                                        <div class="star5 mt-item-reviews-average-rating ratingValue">5.0</div>
                                                    </div>
                                                </div>
                                                <div class="title-n-categories">
                                                    <h4 class="post-name">
                                                        <a href="https://foodhub.modeltheme.com/recipe/bbq-lobster-with-corn-and-ginger-butter/" title="BBQ lobster ginger butter with patatoes">BBQ lobster ginger
                                                            butter with patatoes</a>
                                                    </h4>
                                                    <div class="categories-name">
                                                        <svg height="15px" viewBox="0 -9 512.00282 512" width="15px" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="m404.015625 45.144531c-16.628906-2.152343-33.242187-.871093-49.503906 3.8125-23.332031-30.78125-59.683594-48.957031-98.515625-48.957031-38.832032 0-75.183594 18.1875-98.515625 48.957031-16.261719-4.667969-32.875-5.957031-49.503907-3.8125-61.035156 7.910157-107.453124 60.144531-107.97265575 121.503907-.48437525 57.40625 38.02343775 107.175781 93.64453175 121.019531 13.207031 3.28125 22.949218 14.589843 24.238281 28.140625l7.398437 77.710937h-.007812l4.230468 44.394531c1.796876 18.941407 25.773438 31.945313 35.855469 36.605469 1.441407.664063 2.597657 1.15625 3.363281 1.476563 27.738282 11.675781 57.503907 17.511718 87.269532 17.511718 29.757812 0 59.496094-5.835937 87.191406-17.496093 6.195312-2.558594 37.207031-16.453125 39.273438-38.097657l4.230468-44.394531h-.011718l7.398437-77.710937c1.289063-13.550782 11.035156-24.859375 24.242187-28.140625 55.648438-13.851563 94.164063-63.613281 93.679688-121.019531-.535156-61.359376-46.949219-113.59375-107.984375-121.503907zm-67.617187 414.582031c-51.105469 21.519532-109.71875 21.53125-160.859376-.019531-11.007812-4.589843-27.664062-15.21875-28.449218-23.464843l-1.09375-11.457032c34.914062 16.878906 71.832031 25.425782 109.992187 25.425782 38.160157 0 75.078125-8.546876 109.992188-25.425782l-1.09375 11.457032c-.769531 8.246093-17.4375 18.882812-28.488281 23.484374zm77.679687-189.203124c-20.453125 5.09375-35.546875 22.625-37.550781 43.605468l-8.546875 89.707032c-35.34375 18.988281-72.984375 28.707031-111.984375 28.707031s-76.640625-9.71875-111.988282-28.707031l-8.542968-89.707032c-2.003906-20.988281-17.097656-38.511718-37.550782-43.605468-47.671874-11.863282-80.675781-54.519532-80.261718-103.726563.449218-52.59375 40.253906-97.355469 92.59375-104.136719 4.449218-.574218 8.90625-.875 13.355468-.875 11.589844 0 23.136719 1.960938 34.453126 5.855469l6.390624 2.199219 3.796876-5.597656c19.765624-29.15625 52.570312-46.582032 87.753906-46.582032 35.1875 0 67.992187 17.425782 87.757812 46.589844l3.792969 5.597656 6.394531-2.199218c15.660156-5.386719 31.742188-7.0625 47.808594-4.980469 52.328125 6.773437 92.140625 51.539062 92.59375 104.132812.410156 49.210938-32.59375 91.867188-80.265625 103.722657zm0 0"></path>
                                                            <path d="m166.625 300.210938c-4.835938.597656-8.269531 5.015624-7.660156 9.851562l8.828125 70.621094c.554687 4.464844 4.359375 7.730468 8.746093 7.730468.371094 0 .734376-.027343 1.101563-.070312 4.839844-.597656 8.273437-5.015625 7.664063-9.851562l-8.828126-70.621094c-.609374-4.84375-5.066406-8.21875-9.851562-7.660156zm0 0"></path>
                                                            <path d="m229.511719 317.796875c-4.871094 0-8.828125 3.945313-8.828125 8.828125v70.621094c0 4.878906 3.957031 8.824218 8.828125 8.824218 4.875 0 8.828125-3.945312 8.828125-8.824218v-70.621094c0-4.882812-3.953125-8.828125-8.828125-8.828125zm0 0"></path>
                                                            <path d="m345.367188 300.210938c-4.792969-.558594-9.25 2.816406-9.851563 7.660156l-8.828125 70.621094c-.601562 4.839843 2.824219 9.253906 7.660156 9.851562.371094.042969.742188.070312 1.105469.070312 4.386719 0 8.191406-3.265624 8.746094-7.730468l8.828125-70.621094c.609375-4.835938-2.824219-9.253906-7.660156-9.851562zm0 0"></path>
                                                            <path d="m282.476562 317.796875c-4.871093 0-8.828124 3.945313-8.828124 8.828125v70.621094c0 4.878906 3.957031 8.824218 8.828124 8.824218 4.875 0 8.828126-3.945312 8.828126-8.824218v-70.621094c0-4.882812-3.953126-8.828125-8.828126-8.828125zm0 0"></path>
                                                            <path d="m141.335938 88.277344c-73.695313-.625-88.039063 59.296875-88.164063 59.90625-1.050781 4.757812 1.96875 9.460937 6.726563 10.503906.636718.140625 1.28125.203125 1.898437.203125 4.054687 0 7.714844-2.808594 8.617187-6.9375.105469-.46875 10.691407-47.042969 70.734376-46.027344 4.722656-.328125 8.871093-3.867187 8.925781-8.730469.050781-4.867187-3.867188-8.863281-8.738281-8.917968zm0 0"></path>
                                                            <path d="m206.464844 54.804688c-3.859375 2.980468-4.574219 8.527343-1.589844 12.382812 2.976562 3.859375 8.527344 4.554688 12.382812 1.597656.363282-.292968 37.269532-28.089844 77.824219.238282 1.535157 1.078124 3.304688 1.597656 5.050781 1.597656 2.789063 0 5.523438-1.316406 7.246094-3.777344 2.789063-3.992188 1.820313-9.5-2.179687-12.289062-40.878907-28.539063-82.457031-12.304688-98.734375.25zm0 0"></path>
                                                        </svg>
                                                        <a href="https://foodhub.modeltheme.com/author/oscar_admin/">James Colins</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 293px;">
                                        <div class="single-listing list-view">
                                            <div class="listings_custom  col-md-12 ">
                                                <div class="listing-thumbnail ">
                                                    <a class="relative" href="https://foodhub.modeltheme.com/recipe/mediterranean-snapper-tray-bake/"></a>
                                                    <div class="listing-star">
                                                        <div class="star5 mt-item-reviews-average-rating ratingValue">5.0</div>
                                                    </div>
                                                </div>
                                                <div class="title-n-categories">
                                                    <h4 class="post-name">
                                                        <a href="https://foodhub.modeltheme.com/recipe/mediterranean-snapper-tray-bake/" title="Mediterran snapper tray bake">Mediterran snapper tray bake</a>
                                                    </h4>
                                                    <div class="categories-name">
                                                        <svg height="15px" viewBox="0 -9 512.00282 512" width="15px" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="m404.015625 45.144531c-16.628906-2.152343-33.242187-.871093-49.503906 3.8125-23.332031-30.78125-59.683594-48.957031-98.515625-48.957031-38.832032 0-75.183594 18.1875-98.515625 48.957031-16.261719-4.667969-32.875-5.957031-49.503907-3.8125-61.035156 7.910157-107.453124 60.144531-107.97265575 121.503907-.48437525 57.40625 38.02343775 107.175781 93.64453175 121.019531 13.207031 3.28125 22.949218 14.589843 24.238281 28.140625l7.398437 77.710937h-.007812l4.230468 44.394531c1.796876 18.941407 25.773438 31.945313 35.855469 36.605469 1.441407.664063 2.597657 1.15625 3.363281 1.476563 27.738282 11.675781 57.503907 17.511718 87.269532 17.511718 29.757812 0 59.496094-5.835937 87.191406-17.496093 6.195312-2.558594 37.207031-16.453125 39.273438-38.097657l4.230468-44.394531h-.011718l7.398437-77.710937c1.289063-13.550782 11.035156-24.859375 24.242187-28.140625 55.648438-13.851563 94.164063-63.613281 93.679688-121.019531-.535156-61.359376-46.949219-113.59375-107.984375-121.503907zm-67.617187 414.582031c-51.105469 21.519532-109.71875 21.53125-160.859376-.019531-11.007812-4.589843-27.664062-15.21875-28.449218-23.464843l-1.09375-11.457032c34.914062 16.878906 71.832031 25.425782 109.992187 25.425782 38.160157 0 75.078125-8.546876 109.992188-25.425782l-1.09375 11.457032c-.769531 8.246093-17.4375 18.882812-28.488281 23.484374zm77.679687-189.203124c-20.453125 5.09375-35.546875 22.625-37.550781 43.605468l-8.546875 89.707032c-35.34375 18.988281-72.984375 28.707031-111.984375 28.707031s-76.640625-9.71875-111.988282-28.707031l-8.542968-89.707032c-2.003906-20.988281-17.097656-38.511718-37.550782-43.605468-47.671874-11.863282-80.675781-54.519532-80.261718-103.726563.449218-52.59375 40.253906-97.355469 92.59375-104.136719 4.449218-.574218 8.90625-.875 13.355468-.875 11.589844 0 23.136719 1.960938 34.453126 5.855469l6.390624 2.199219 3.796876-5.597656c19.765624-29.15625 52.570312-46.582032 87.753906-46.582032 35.1875 0 67.992187 17.425782 87.757812 46.589844l3.792969 5.597656 6.394531-2.199218c15.660156-5.386719 31.742188-7.0625 47.808594-4.980469 52.328125 6.773437 92.140625 51.539062 92.59375 104.132812.410156 49.210938-32.59375 91.867188-80.265625 103.722657zm0 0"></path>
                                                            <path d="m166.625 300.210938c-4.835938.597656-8.269531 5.015624-7.660156 9.851562l8.828125 70.621094c.554687 4.464844 4.359375 7.730468 8.746093 7.730468.371094 0 .734376-.027343 1.101563-.070312 4.839844-.597656 8.273437-5.015625 7.664063-9.851562l-8.828126-70.621094c-.609374-4.84375-5.066406-8.21875-9.851562-7.660156zm0 0"></path>
                                                            <path d="m229.511719 317.796875c-4.871094 0-8.828125 3.945313-8.828125 8.828125v70.621094c0 4.878906 3.957031 8.824218 8.828125 8.824218 4.875 0 8.828125-3.945312 8.828125-8.824218v-70.621094c0-4.882812-3.953125-8.828125-8.828125-8.828125zm0 0"></path>
                                                            <path d="m345.367188 300.210938c-4.792969-.558594-9.25 2.816406-9.851563 7.660156l-8.828125 70.621094c-.601562 4.839843 2.824219 9.253906 7.660156 9.851562.371094.042969.742188.070312 1.105469.070312 4.386719 0 8.191406-3.265624 8.746094-7.730468l8.828125-70.621094c.609375-4.835938-2.824219-9.253906-7.660156-9.851562zm0 0"></path>
                                                            <path d="m282.476562 317.796875c-4.871093 0-8.828124 3.945313-8.828124 8.828125v70.621094c0 4.878906 3.957031 8.824218 8.828124 8.824218 4.875 0 8.828126-3.945312 8.828126-8.824218v-70.621094c0-4.882812-3.953126-8.828125-8.828126-8.828125zm0 0"></path>
                                                            <path d="m141.335938 88.277344c-73.695313-.625-88.039063 59.296875-88.164063 59.90625-1.050781 4.757812 1.96875 9.460937 6.726563 10.503906.636718.140625 1.28125.203125 1.898437.203125 4.054687 0 7.714844-2.808594 8.617187-6.9375.105469-.46875 10.691407-47.042969 70.734376-46.027344 4.722656-.328125 8.871093-3.867187 8.925781-8.730469.050781-4.867187-3.867188-8.863281-8.738281-8.917968zm0 0"></path>
                                                            <path d="m206.464844 54.804688c-3.859375 2.980468-4.574219 8.527343-1.589844 12.382812 2.976562 3.859375 8.527344 4.554688 12.382812 1.597656.363282-.292968 37.269532-28.089844 77.824219.238282 1.535157 1.078124 3.304688 1.597656 5.050781 1.597656 2.789063 0 5.523438-1.316406 7.246094-3.777344 2.789063-3.992188 1.820313-9.5-2.179687-12.289062-40.878907-28.539063-82.457031-12.304688-98.734375.25zm0 0"></path>
                                                        </svg>
                                                        <a href="https://foodhub.modeltheme.com/author/oscar_admin/">James Colins</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 293px;">
                                        <div class="single-listing list-view">
                                            <div class="listings_custom is_sponsored col-md-12 ">
                                                <div class="listing-thumbnail ">
                                                    <a class="relative" href="https://foodhub.modeltheme.com/recipe/cheesy-sausage-lasagna-soup/"><img class="listing_post_image"
                                                                                                                                                       src="https://foodhub.modeltheme.com/wp-content/uploads/2019/01/recipes-21-500x500.jpg"
                                                                                                                                                       alt="Cheesy Sausage Lasagna with soup"></a>
                                                    <div class="listing-star">
                                                        <div class="star5 mt-item-reviews-average-rating ratingValue">5.0</div>
                                                    </div>
                                                    <div class="listing_sponsored_bolt">
                                                        <span class="listing_sponsored_status" title="Sponsored Listing"><i class="fa fa-bolt" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                <div class="title-n-categories">
                                                    <h4 class="post-name">
                                                        <a href="https://foodhub.modeltheme.com/recipe/cheesy-sausage-lasagna-soup/" title="Cheesy Sausage Lasagna with soup">Cheesy Sausage Lasagna with soup</a>
                                                    </h4>
                                                    <div class="categories-name">
                                                        <svg height="15px" viewBox="0 -9 512.00282 512" width="15px" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="m404.015625 45.144531c-16.628906-2.152343-33.242187-.871093-49.503906 3.8125-23.332031-30.78125-59.683594-48.957031-98.515625-48.957031-38.832032 0-75.183594 18.1875-98.515625 48.957031-16.261719-4.667969-32.875-5.957031-49.503907-3.8125-61.035156 7.910157-107.453124 60.144531-107.97265575 121.503907-.48437525 57.40625 38.02343775 107.175781 93.64453175 121.019531 13.207031 3.28125 22.949218 14.589843 24.238281 28.140625l7.398437 77.710937h-.007812l4.230468 44.394531c1.796876 18.941407 25.773438 31.945313 35.855469 36.605469 1.441407.664063 2.597657 1.15625 3.363281 1.476563 27.738282 11.675781 57.503907 17.511718 87.269532 17.511718 29.757812 0 59.496094-5.835937 87.191406-17.496093 6.195312-2.558594 37.207031-16.453125 39.273438-38.097657l4.230468-44.394531h-.011718l7.398437-77.710937c1.289063-13.550782 11.035156-24.859375 24.242187-28.140625 55.648438-13.851563 94.164063-63.613281 93.679688-121.019531-.535156-61.359376-46.949219-113.59375-107.984375-121.503907zm-67.617187 414.582031c-51.105469 21.519532-109.71875 21.53125-160.859376-.019531-11.007812-4.589843-27.664062-15.21875-28.449218-23.464843l-1.09375-11.457032c34.914062 16.878906 71.832031 25.425782 109.992187 25.425782 38.160157 0 75.078125-8.546876 109.992188-25.425782l-1.09375 11.457032c-.769531 8.246093-17.4375 18.882812-28.488281 23.484374zm77.679687-189.203124c-20.453125 5.09375-35.546875 22.625-37.550781 43.605468l-8.546875 89.707032c-35.34375 18.988281-72.984375 28.707031-111.984375 28.707031s-76.640625-9.71875-111.988282-28.707031l-8.542968-89.707032c-2.003906-20.988281-17.097656-38.511718-37.550782-43.605468-47.671874-11.863282-80.675781-54.519532-80.261718-103.726563.449218-52.59375 40.253906-97.355469 92.59375-104.136719 4.449218-.574218 8.90625-.875 13.355468-.875 11.589844 0 23.136719 1.960938 34.453126 5.855469l6.390624 2.199219 3.796876-5.597656c19.765624-29.15625 52.570312-46.582032 87.753906-46.582032 35.1875 0 67.992187 17.425782 87.757812 46.589844l3.792969 5.597656 6.394531-2.199218c15.660156-5.386719 31.742188-7.0625 47.808594-4.980469 52.328125 6.773437 92.140625 51.539062 92.59375 104.132812.410156 49.210938-32.59375 91.867188-80.265625 103.722657zm0 0"></path>
                                                            <path d="m166.625 300.210938c-4.835938.597656-8.269531 5.015624-7.660156 9.851562l8.828125 70.621094c.554687 4.464844 4.359375 7.730468 8.746093 7.730468.371094 0 .734376-.027343 1.101563-.070312 4.839844-.597656 8.273437-5.015625 7.664063-9.851562l-8.828126-70.621094c-.609374-4.84375-5.066406-8.21875-9.851562-7.660156zm0 0"></path>
                                                            <path d="m229.511719 317.796875c-4.871094 0-8.828125 3.945313-8.828125 8.828125v70.621094c0 4.878906 3.957031 8.824218 8.828125 8.824218 4.875 0 8.828125-3.945312 8.828125-8.824218v-70.621094c0-4.882812-3.953125-8.828125-8.828125-8.828125zm0 0"></path>
                                                            <path d="m345.367188 300.210938c-4.792969-.558594-9.25 2.816406-9.851563 7.660156l-8.828125 70.621094c-.601562 4.839843 2.824219 9.253906 7.660156 9.851562.371094.042969.742188.070312 1.105469.070312 4.386719 0 8.191406-3.265624 8.746094-7.730468l8.828125-70.621094c.609375-4.835938-2.824219-9.253906-7.660156-9.851562zm0 0"></path>
                                                            <path d="m282.476562 317.796875c-4.871093 0-8.828124 3.945313-8.828124 8.828125v70.621094c0 4.878906 3.957031 8.824218 8.828124 8.824218 4.875 0 8.828126-3.945312 8.828126-8.824218v-70.621094c0-4.882812-3.953126-8.828125-8.828126-8.828125zm0 0"></path>
                                                            <path d="m141.335938 88.277344c-73.695313-.625-88.039063 59.296875-88.164063 59.90625-1.050781 4.757812 1.96875 9.460937 6.726563 10.503906.636718.140625 1.28125.203125 1.898437.203125 4.054687 0 7.714844-2.808594 8.617187-6.9375.105469-.46875 10.691407-47.042969 70.734376-46.027344 4.722656-.328125 8.871093-3.867187 8.925781-8.730469.050781-4.867187-3.867188-8.863281-8.738281-8.917968zm0 0"></path>
                                                            <path d="m206.464844 54.804688c-3.859375 2.980468-4.574219 8.527343-1.589844 12.382812 2.976562 3.859375 8.527344 4.554688 12.382812 1.597656.363282-.292968 37.269532-28.089844 77.824219.238282 1.535157 1.078124 3.304688 1.597656 5.050781 1.597656 2.789063 0 5.523438-1.316406 7.246094-3.777344 2.789063-3.992188 1.820313-9.5-2.179687-12.289062-40.878907-28.539063-82.457031-12.304688-98.734375.25zm0 0"></path>
                                                        </svg>
                                                        <a href="https://foodhub.modeltheme.com/author/oscar_admin/">James Colins</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 293px;">
                                        <div class="single-listing list-view">
                                            <div class="listings_custom  col-md-12 ">
                                                <div class="listing-thumbnail ">
                                                    <a class="relative" href="https://foodhub.modeltheme.com/recipe/italian-tiramisu/"><img class="listing_post_image"
                                                                                                                                            src="https://foodhub.modeltheme.com/wp-content/uploads/2019/08/recipes-05-500x500.jpg"
                                                                                                                                            alt="Italian Tiramisu Vero Perro Wine"></a>
                                                    <div class="listing-star">
                                                        <div class="star5 mt-item-reviews-average-rating ratingValue">5.0</div>
                                                    </div>
                                                </div>
                                                <div class="title-n-categories">
                                                    <h4 class="post-name">
                                                        <a href="https://foodhub.modeltheme.com/recipe/italian-tiramisu/" title="Italian Tiramisu Vero Perro Wine">Italian Tiramisu Vero Perro Wine</a>
                                                    </h4>
                                                    <div class="categories-name">
                                                        <svg height="15px" viewBox="0 -9 512.00282 512" width="15px" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="m404.015625 45.144531c-16.628906-2.152343-33.242187-.871093-49.503906 3.8125-23.332031-30.78125-59.683594-48.957031-98.515625-48.957031-38.832032 0-75.183594 18.1875-98.515625 48.957031-16.261719-4.667969-32.875-5.957031-49.503907-3.8125-61.035156 7.910157-107.453124 60.144531-107.97265575 121.503907-.48437525 57.40625 38.02343775 107.175781 93.64453175 121.019531 13.207031 3.28125 22.949218 14.589843 24.238281 28.140625l7.398437 77.710937h-.007812l4.230468 44.394531c1.796876 18.941407 25.773438 31.945313 35.855469 36.605469 1.441407.664063 2.597657 1.15625 3.363281 1.476563 27.738282 11.675781 57.503907 17.511718 87.269532 17.511718 29.757812 0 59.496094-5.835937 87.191406-17.496093 6.195312-2.558594 37.207031-16.453125 39.273438-38.097657l4.230468-44.394531h-.011718l7.398437-77.710937c1.289063-13.550782 11.035156-24.859375 24.242187-28.140625 55.648438-13.851563 94.164063-63.613281 93.679688-121.019531-.535156-61.359376-46.949219-113.59375-107.984375-121.503907zm-67.617187 414.582031c-51.105469 21.519532-109.71875 21.53125-160.859376-.019531-11.007812-4.589843-27.664062-15.21875-28.449218-23.464843l-1.09375-11.457032c34.914062 16.878906 71.832031 25.425782 109.992187 25.425782 38.160157 0 75.078125-8.546876 109.992188-25.425782l-1.09375 11.457032c-.769531 8.246093-17.4375 18.882812-28.488281 23.484374zm77.679687-189.203124c-20.453125 5.09375-35.546875 22.625-37.550781 43.605468l-8.546875 89.707032c-35.34375 18.988281-72.984375 28.707031-111.984375 28.707031s-76.640625-9.71875-111.988282-28.707031l-8.542968-89.707032c-2.003906-20.988281-17.097656-38.511718-37.550782-43.605468-47.671874-11.863282-80.675781-54.519532-80.261718-103.726563.449218-52.59375 40.253906-97.355469 92.59375-104.136719 4.449218-.574218 8.90625-.875 13.355468-.875 11.589844 0 23.136719 1.960938 34.453126 5.855469l6.390624 2.199219 3.796876-5.597656c19.765624-29.15625 52.570312-46.582032 87.753906-46.582032 35.1875 0 67.992187 17.425782 87.757812 46.589844l3.792969 5.597656 6.394531-2.199218c15.660156-5.386719 31.742188-7.0625 47.808594-4.980469 52.328125 6.773437 92.140625 51.539062 92.59375 104.132812.410156 49.210938-32.59375 91.867188-80.265625 103.722657zm0 0"></path>
                                                            <path d="m166.625 300.210938c-4.835938.597656-8.269531 5.015624-7.660156 9.851562l8.828125 70.621094c.554687 4.464844 4.359375 7.730468 8.746093 7.730468.371094 0 .734376-.027343 1.101563-.070312 4.839844-.597656 8.273437-5.015625 7.664063-9.851562l-8.828126-70.621094c-.609374-4.84375-5.066406-8.21875-9.851562-7.660156zm0 0"></path>
                                                            <path d="m229.511719 317.796875c-4.871094 0-8.828125 3.945313-8.828125 8.828125v70.621094c0 4.878906 3.957031 8.824218 8.828125 8.824218 4.875 0 8.828125-3.945312 8.828125-8.824218v-70.621094c0-4.882812-3.953125-8.828125-8.828125-8.828125zm0 0"></path>
                                                            <path d="m345.367188 300.210938c-4.792969-.558594-9.25 2.816406-9.851563 7.660156l-8.828125 70.621094c-.601562 4.839843 2.824219 9.253906 7.660156 9.851562.371094.042969.742188.070312 1.105469.070312 4.386719 0 8.191406-3.265624 8.746094-7.730468l8.828125-70.621094c.609375-4.835938-2.824219-9.253906-7.660156-9.851562zm0 0"></path>
                                                            <path d="m282.476562 317.796875c-4.871093 0-8.828124 3.945313-8.828124 8.828125v70.621094c0 4.878906 3.957031 8.824218 8.828124 8.824218 4.875 0 8.828126-3.945312 8.828126-8.824218v-70.621094c0-4.882812-3.953126-8.828125-8.828126-8.828125zm0 0"></path>
                                                            <path d="m141.335938 88.277344c-73.695313-.625-88.039063 59.296875-88.164063 59.90625-1.050781 4.757812 1.96875 9.460937 6.726563 10.503906.636718.140625 1.28125.203125 1.898437.203125 4.054687 0 7.714844-2.808594 8.617187-6.9375.105469-.46875 10.691407-47.042969 70.734376-46.027344 4.722656-.328125 8.871093-3.867187 8.925781-8.730469.050781-4.867187-3.867188-8.863281-8.738281-8.917968zm0 0"></path>
                                                            <path d="m206.464844 54.804688c-3.859375 2.980468-4.574219 8.527343-1.589844 12.382812 2.976562 3.859375 8.527344 4.554688 12.382812 1.597656.363282-.292968 37.269532-28.089844 77.824219.238282 1.535157 1.078124 3.304688 1.597656 5.050781 1.597656 2.789063 0 5.523438-1.316406 7.246094-3.777344 2.789063-3.992188 1.820313-9.5-2.179687-12.289062-40.878907-28.539063-82.457031-12.304688-98.734375.25zm0 0"></path>
                                                        </svg>
                                                        <a href="https://foodhub.modeltheme.com/author/oscar_admin/">James Colins</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1580291324698 vc_row-has-fill"
         style="position: relative; left: -302.5px; box-sizing: border-box; width: 1775px; padding-left: 302.5px; padding-right: 302.5px;">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="title-subtile-holder  animateIn text_center" data-animate="fadeIn" style="opacity: 100;"><h1 style="color: #151515;" class="section-title custom_color">From the Blog</h1>
                        <p style="color: #808080;" class="section-subtitle custom_color">Excepteur sint occaecat cupidatat non qui proident, sunt culpa qui officia deserunmollit anim id est laborum.</p></div>
                    <div class="vc_empty_space" style="height: 45px"><span class="vc_empty_space_inner"></span></div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1570439646763">
                        <div class="wpb_column vc_column_container vc_col-sm-4">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div style="background-color:#528f2d" class="category-list-shortcode-wrapper"><h3 class="category-list-title">Categories:</h3>
                                        <div class="category-list-shortcode category-list-0">
                                            <div class="cat-icon"><img alt="cat-icon" class="cat-icon" src="https://foodhub.modeltheme.com/wp-content/uploads/2019/10/post-category01.png"></div>
                                            <div class="cat-info"><a class="cat-name" href="https://foodhub.modeltheme.com/category/kitchen/">Kitchen</a><span class="count-posts">5 Posts</span></div>
                                        </div>
                                        <div class="category-list-shortcode category-list-1">
                                            <div class="cat-icon"><img alt="cat-icon" class="cat-icon" src="https://foodhub.modeltheme.com/wp-content/uploads/2019/10/post-categories2.png"></div>
                                            <div class="cat-info"><a class="cat-name" href="https://foodhub.modeltheme.com/category/restaurants/">Restaurants</a><span class="count-posts">3 Posts</span></div>
                                        </div>
                                        <div class="category-list-shortcode category-list-2">
                                            <div class="cat-icon"><img alt="cat-icon" class="cat-icon" src="https://foodhub.modeltheme.com/wp-content/uploads/2019/10/post-categories4.png"></div>
                                            <div class="cat-info"><a class="cat-name" href="https://foodhub.modeltheme.com/category/catering-events/">Events</a><span class="count-posts">3 Posts</span></div>
                                        </div>
                                        <div class="category-list-shortcode category-list-3">
                                            <div class="cat-icon"><img alt="cat-icon" class="cat-icon" src="https://foodhub.modeltheme.com/wp-content/uploads/2019/10/post-categories5.png"></div>
                                            <div class="cat-info"><a class="cat-name" href="https://foodhub.modeltheme.com/category/healthy-lifestyle/">Lifestyle</a><span class="count-posts">3 Posts</span></div>
                                        </div>
                                        <div class="category-list-shortcode category-list-4">
                                            <div class="cat-icon"><img alt="cat-icon" class="cat-icon" src="https://foodhub.modeltheme.com/wp-content/uploads/2019/10/post-categories3.png"></div>
                                            <div class="cat-info"><a class="cat-name" href="https://foodhub.modeltheme.com/category/reviews/">Reviews</a><span class="count-posts">2 Posts</span></div>
                                        </div>
                                        <div class="category-list-shortcode category-list-5">
                                            <div class="cat-icon"><img alt="cat-icon" class="cat-icon" src="https://foodhub.modeltheme.com/wp-content/uploads/2020/01/cuisine-category.png"></div>
                                            <div class="cat-info"><a class="cat-name" href="https://foodhub.modeltheme.com/category/cuisine/">Cuisine</a><span class="count-posts">2 Posts</span></div>
                                        </div>
                                        <div class="category-list-shortcode category-list-6">
                                            <div class="cat-icon"><img alt="cat-icon" class="cat-icon" src="https://foodhub.modeltheme.com/wp-content/uploads/2020/01/soup-category.png"></div>
                                            <div class="cat-info"><a class="cat-name" href="https://foodhub.modeltheme.com/category/soups/">Soups</a><span class="count-posts">1 Posts</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-8">
                            <div class="vc_column-inner vc_custom_1580291314512">
                                <div class="wpb_wrapper">
                                    <div class="blog-posts simple-posts blog-posts-shortcode wow fadeIn" style="visibility: hidden; animation-name: none;">
                                        <div class="row">
                                            <div class="vc_col-sm-6">
                                                <article class="single-post list-view">
                                                    <div class="blog_custom">

                                                        <div class="col-md-12 post-thumbnail">
                                                            <a class="relative" href="https://foodhub.modeltheme.com/allergens-to-watch-out-for-when-dining/"><img class="blog_post_image"
                                                                                                                                                                   src="https://foodhub.modeltheme.com/wp-content/uploads/2019/10/blogpost04-625x375.jpg"
                                                                                                                                                                   alt="Allergens to Watch Out For"></a>
                                                        </div>

                                                        <div class="post-details col-md-12">
                                                            <div class="title-n-excerpt"><span class="post-tags-list"><a href="https://foodhub.modeltheme.com/tag/allergens/" rel="tag">allergens</a>, <a
                                                                            href="https://foodhub.modeltheme.com/tag/dinner/" rel="tag">dinner</a></span>
                                                                <h3 class="post-name row">
                                                                    <a href="https://foodhub.modeltheme.com/allergens-to-watch-out-for-when-dining/" title="Allergens to Watch Out For">Allergens to Watch Out For</a>
                                                                </h3>
                                                                <div class="post-excerpt row">
                                                                    <p></p>
                                                                    <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum complectitur et, eam ut veri omnium fabulas. Mel</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="vc_col-sm-6">
                                                <article class="single-post list-view">
                                                    <div class="blog_custom">

                                                        <div class="col-md-12 post-thumbnail">
                                                            <a class="relative" href="https://foodhub.modeltheme.com/15-vegan-roast-alternatives-for-meat-free-guests/"><img class="blog_post_image"
                                                                                                                                                                             src="https://foodhub.modeltheme.com/wp-content/uploads/2019/10/blogpost03-625x375.jpg"
                                                                                                                                                                             alt="15 Vegan Roast Alternatives"></a>
                                                        </div>

                                                        <div class="post-details col-md-12">
                                                            <div class="title-n-excerpt"><span class="post-tags-list"><a href="https://foodhub.modeltheme.com/tag/cook/" rel="tag">cook</a>, <a
                                                                            href="https://foodhub.modeltheme.com/tag/dinner/" rel="tag">dinner</a></span>
                                                                <h3 class="post-name row">
                                                                    <a href="https://foodhub.modeltheme.com/15-vegan-roast-alternatives-for-meat-free-guests/" title="15 Vegan Roast Alternatives">15 Vegan Roast
                                                                        Alternatives</a>
                                                                </h3>
                                                                <div class="post-excerpt row">
                                                                    <p></p>
                                                                    <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum complectitur et, eam ut veri omnium fabulas. Mel</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="vc_col-sm-6">
                                                <article class="single-post list-view">
                                                    <div class="blog_custom">

                                                        <div class="col-md-12 post-thumbnail">
                                                            <a class="relative" href="https://foodhub.modeltheme.com/why-your-kitchen-tools-are-so-important-for-the-food/"><img class="blog_post_image"
                                                                                                                                                                                 src="https://foodhub.modeltheme.com/wp-content/uploads/2019/10/blog-pic01-625x375.jpg"
                                                                                                                                                                                 alt="Why your Tools are So Important"></a>
                                                        </div>

                                                        <div class="post-details col-md-12">
                                                            <div class="title-n-excerpt"><span class="post-tags-list"><a href="https://foodhub.modeltheme.com/tag/kitchen/" rel="tag">kitchen</a>, <a
                                                                            href="https://foodhub.modeltheme.com/tag/tools/" rel="tag">tools</a></span>
                                                                <h3 class="post-name row">
                                                                    <a href="https://foodhub.modeltheme.com/why-your-kitchen-tools-are-so-important-for-the-food/" title="Why your Tools are So Important">Why your
                                                                        Tools are So</a>
                                                                </h3>
                                                                <div class="post-excerpt row">
                                                                    <p></p>
                                                                    <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum complectitur et, eam ut veri omnium fabulas. Mel</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="vc_col-sm-6">
                                                <article class="single-post list-view">
                                                    <div class="blog_custom">

                                                        <div class="col-md-12 post-thumbnail">
                                                            <a class="relative" href="https://foodhub.modeltheme.com/cafe-restaurant-relaxation/"><img class="blog_post_image"
                                                                                                                                                       src="https://foodhub.modeltheme.com/wp-content/uploads/2019/01/recipes-10-625x375.jpg"
                                                                                                                                                       alt="Cafe Restaurant Relax"></a>
                                                        </div>

                                                        <div class="post-details col-md-12">
                                                            <div class="title-n-excerpt"><span class="post-tags-list"><a href="https://foodhub.modeltheme.com/tag/restaurant/" rel="tag">restaurant</a>, <a
                                                                            href="https://foodhub.modeltheme.com/tag/vegan/" rel="tag">vegan</a></span>
                                                                <h3 class="post-name row">
                                                                    <a href="https://foodhub.modeltheme.com/cafe-restaurant-relaxation/" title="Cafe Restaurant Relax">Cafe Restaurant Relax</a>
                                                                </h3>
                                                                <div class="post-excerpt row">
                                                                    <p></p>
                                                                    <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum complectitur et, eam ut veri omnium fabulas. Mel</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeIn fadeIn vc_custom_1575890071159"
         style="position: relative; left: -302.5px; box-sizing: border-box; width: 1775px; padding-left: 302.5px; padding-right: 302.5px;">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="title-subtile-holder  animateIn text_center" data-animate="fadeIn" style="opacity: 100;"><h1 style="color: #151515;" class="section-title custom_color">Cakes &amp; Cupcakes</h1>
                        <p style="color: #808080;" class="section-subtitle custom_color">Excepteur sint occaecat cupidatat non qui proident, sunt culpa qui officia deserunmollit anim id est laborum.</p></div>
                    <div class="vc_empty_space" style="height: 45px"><span class="vc_empty_space_inner"></span></div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1570606223231">
                        <div class="tab-listing-grid wpb_column vc_column_container vc_col-sm-8">
                            <div class="vc_column-inner vc_custom_1572609573851">
                                <div class="wpb_wrapper">
                                    <div id="mt_ico_filters_6264557293e96" class="iconfilter-shortcode wow  " style="visibility: hidden; animation-name: none;">
                                        <div class="row">
                                            <div class="foodhub-main-content">
                                                <section class="foodhub-gallery">
                                                    <div class="col-md-12 iconfilter-listing">
                                                        <div class="ico-cat-parent big-parent row">
                                                            <div class="col-md-6 row-2items  foodhub-single-list-item mix indian Beef Massaman Soup Marroc Style salads">
                                                                <div class="post  ">
                                                                    <div class="blog_custom_listings">
                                                                        <div class="thumbnail-name col-md-5 col-xs-12">
                                                                            <div class="foodhub-img-left pull-left">
                                                                                <a class="relative" href="https://foodhub.modeltheme.com/recipe/beef-massaman-soup/"><img class="blog_post_image"
                                                                                                                                                                          src="https://foodhub.modeltheme.com/wp-content/uploads/2019/11/recipe_massaman_soup-1-500x350.jpg"
                                                                                                                                                                          alt="Beef Massaman Soup Marroc Style"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="foodhub-details col-md-7 col-xs-12">
                                                                            <div class="listings_details">
                                                                                <div class="foodhub-details-title ">
                                                                                    <h4 class="post-name-listings"><a href="https://foodhub.modeltheme.com/recipe/beef-massaman-soup/">Beef Massaman Soup Marroc</a>
                                                                                    </h4>
                                                                                    <div class="clearfix"></div>
                                                                                    <div class="foodhub-meta">
                                                                                        <div class="listing-duration">60 min</div>
                                                                                        <div class="listing-steps">4 steps</div>
                                                                                        <div class="foodhub-metas-single-meta  ico-type">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 row-2items last_item_row foodhub-single-list-item mix italian Italian Tiramisu Vero Perro Wine salads">
                                                                <div class="post  ">
                                                                    <div class="blog_custom_listings">
                                                                        <div class="thumbnail-name col-md-5 col-xs-12">
                                                                            <div class="foodhub-img-left pull-left">
                                                                                <a class="relative" href="https://foodhub.modeltheme.com/recipe/italian-tiramisu/"><img class="blog_post_image"
                                                                                                                                                                        src="https://foodhub.modeltheme.com/wp-content/uploads/2019/08/recipes-05-500x350.jpg"
                                                                                                                                                                        alt="Italian Tiramisu Vero Perro Wine"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="foodhub-details col-md-7 col-xs-12">
                                                                            <div class="listings_details">
                                                                                <div class="foodhub-details-title ">
                                                                                    <h4 class="post-name-listings"><a href="https://foodhub.modeltheme.com/recipe/italian-tiramisu/">Italian Tiramisu Vero Perro</a>
                                                                                    </h4>
                                                                                    <div class="clearfix"></div>
                                                                                    <div class="foodhub-meta">
                                                                                        <div class="listing-duration">30 min</div>
                                                                                        <div class="listing-steps">5 steps</div>
                                                                                        <div class="foodhub-metas-single-meta  ico-type">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 row-2items  foodhub-single-list-item mix american Southern Fried Cabbage with Bacon salads">
                                                                <div class="post  sponsored_listing">
                                                                    <div class="blog_custom_listings">
                                                                        <div class="thumbnail-name col-md-5 col-xs-12">
                                                                            <div class="foodhub-img-left pull-left">
                                                                                <a class="relative" href="https://foodhub.modeltheme.com/recipe/southern-fried-cabbage-with-bacon-mushrooms-and-onions/"><img
                                                                                            class="blog_post_image" src="https://foodhub.modeltheme.com/wp-content/uploads/2019/01/recipes-09-500x350.jpg"
                                                                                            alt="Southern Fried Cabbage with Bacon"></a>
                                                                                <div class="listing_sponsored_bolt">
                                                                                    <span class="listing_sponsored_status" title="Sponsored Listing"><i class="fa fa-bolt" aria-hidden="true"></i></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="foodhub-details col-md-7 col-xs-12">
                                                                            <div class="listings_details">
                                                                                <div class="foodhub-details-title ">
                                                                                    <h4 class="post-name-listings"><a
                                                                                                href="https://foodhub.modeltheme.com/recipe/southern-fried-cabbage-with-bacon-mushrooms-and-onions/">Southern Fried
                                                                                            Cabbage with</a></h4>
                                                                                    <div class="clearfix"></div>
                                                                                    <div class="foodhub-meta">
                                                                                        <div class="listing-duration">60 min</div>
                                                                                        <div class="listing-steps">5 steps</div>
                                                                                        <div class="foodhub-metas-single-meta  ico-type">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 row-2items last_item_row foodhub-single-list-item mix italian Too Much Chocolate Cake Cherrymosa salads">
                                                                <div class="post  ">
                                                                    <div class="blog_custom_listings">
                                                                        <div class="thumbnail-name col-md-5 col-xs-12">
                                                                            <div class="foodhub-img-left pull-left">
                                                                                <a class="relative" href="https://foodhub.modeltheme.com/recipe/too-much-chocolate-cake/"><img class="blog_post_image"
                                                                                                                                                                               src="https://foodhub.modeltheme.com/wp-content/uploads/2019/01/recipes-18-1-500x350.jpg"
                                                                                                                                                                               alt="Too Much Chocolate Cake Cherrymosa"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="foodhub-details col-md-7 col-xs-12">
                                                                            <div class="listings_details">
                                                                                <div class="foodhub-details-title ">
                                                                                    <h4 class="post-name-listings"><a href="https://foodhub.modeltheme.com/recipe/too-much-chocolate-cake/">Too Much Chocolate Cake</a>
                                                                                    </h4>
                                                                                    <div class="clearfix"></div>
                                                                                    <div class="foodhub-meta">
                                                                                        <div class="listing-duration">60 min</div>
                                                                                        <div class="listing-steps">3 steps</div>
                                                                                        <div class="foodhub-metas-single-meta  ico-type">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 row-2items  foodhub-single-list-item mix spanish New York Cheesecake Pot Pie salads">
                                                                <div class="post  ">
                                                                    <div class="blog_custom_listings">
                                                                        <div class="thumbnail-name col-md-5 col-xs-12">
                                                                            <div class="foodhub-img-left pull-left">
                                                                                <a class="relative" href="https://foodhub.modeltheme.com/recipe/new-york-cheesecake/"><img class="blog_post_image"
                                                                                                                                                                           src="https://foodhub.modeltheme.com/wp-content/uploads/2019/01/recipes-19-500x350.jpg"
                                                                                                                                                                           alt="New York Cheesecake Pot Pie"></a></div>
                                                                        </div>
                                                                        <div class="foodhub-details col-md-7 col-xs-12">
                                                                            <div class="listings_details">
                                                                                <div class="foodhub-details-title ">
                                                                                    <h4 class="post-name-listings"><a href="https://foodhub.modeltheme.com/recipe/new-york-cheesecake/">New York Cheesecake Pot</a></h4>
                                                                                    <div class="clearfix"></div>
                                                                                    <div class="foodhub-meta">
                                                                                        <div class="listing-duration">60 min</div>
                                                                                        <div class="listing-steps">4 steps</div>
                                                                                        <div class="foodhub-metas-single-meta  ico-type">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 row-2items last_item_row foodhub-single-list-item mix asian Best Chocolate Chip Cookies salads">
                                                                <div class="post  ">
                                                                    <div class="blog_custom_listings">
                                                                        <div class="thumbnail-name col-md-5 col-xs-12">
                                                                            <div class="foodhub-img-left pull-left">
                                                                                <a class="relative" href="https://foodhub.modeltheme.com/recipe/best-chocolate-chip-cookies/"><img class="blog_post_image"
                                                                                                                                                                                   src="https://foodhub.modeltheme.com/wp-content/uploads/2019/01/recipes-17-1-500x350.jpg"
                                                                                                                                                                                   alt="Best Chocolate Chip Cookies"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="foodhub-details col-md-7 col-xs-12">
                                                                            <div class="listings_details">
                                                                                <div class="foodhub-details-title ">
                                                                                    <h4 class="post-name-listings"><a href="https://foodhub.modeltheme.com/recipe/best-chocolate-chip-cookies/">Best Chocolate Chip
                                                                                            Cookies</a></h4>
                                                                                    <div class="clearfix"></div>
                                                                                    <div class="foodhub-meta">
                                                                                        <div class="listing-duration">60 min</div>
                                                                                        <div class="listing-steps">4 steps</div>
                                                                                        <div class="foodhub-metas-single-meta  ico-type">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 row-2items  foodhub-single-list-item mix american Apple Pie Cider Green Lime salads">
                                                                <div class="post  ">
                                                                    <div class="blog_custom_listings">
                                                                        <div class="thumbnail-name col-md-5 col-xs-12">
                                                                            <div class="foodhub-img-left pull-left">
                                                                                <a class="relative" href="https://foodhub.modeltheme.com/recipe/apple-pie-cider/"><img class="blog_post_image"
                                                                                                                                                                       src="https://foodhub.modeltheme.com/wp-content/uploads/2019/01/recipes-23-500x350.jpg"
                                                                                                                                                                       alt="Apple Pie Cider Green Lime"></a></div>
                                                                        </div>
                                                                        <div class="foodhub-details col-md-7 col-xs-12">
                                                                            <div class="listings_details">
                                                                                <div class="foodhub-details-title ">
                                                                                    <h4 class="post-name-listings"><a href="https://foodhub.modeltheme.com/recipe/apple-pie-cider/">Apple Pie Cider Green</a></h4>
                                                                                    <div class="clearfix"></div>
                                                                                    <div class="foodhub-meta">
                                                                                        <div class="listing-duration">60 min</div>
                                                                                        <div class="listing-steps">4 steps</div>
                                                                                        <div class="foodhub-metas-single-meta  ico-type">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 row-2items last_item_row foodhub-single-list-item mix american B and Honey Strawberry Smoothie salads">
                                                                <div class="post  ">
                                                                    <div class="blog_custom_listings">
                                                                        <div class="thumbnail-name col-md-5 col-xs-12">
                                                                            <div class="foodhub-img-left pull-left">
                                                                                <a class="relative" href="https://foodhub.modeltheme.com/recipe/b-and-ls-strawberry-smoothie/"><img class="blog_post_image"
                                                                                                                                                                                    src="https://foodhub.modeltheme.com/wp-content/uploads/2019/01/recipes-24-500x350.jpg"
                                                                                                                                                                                    alt="B and Honey Strawberry Smoothie"></a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="foodhub-details col-md-7 col-xs-12">
                                                                            <div class="listings_details">
                                                                                <div class="foodhub-details-title ">
                                                                                    <h4 class="post-name-listings"><a href="https://foodhub.modeltheme.com/recipe/b-and-ls-strawberry-smoothie/">B and Honey
                                                                                            Strawberry</a></h4>
                                                                                    <div class="clearfix"></div>
                                                                                    <div class="foodhub-meta">
                                                                                        <div class="listing-duration">30 min</div>
                                                                                        <div class="listing-steps">4 steps</div>
                                                                                        <div class="foodhub-metas-single-meta  ico-type">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="follow-us wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                            <div class="vc_column-inner vc_custom_1580218272653">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <h2 style="color: #ffffff; text-align: center; font-weight: bold;">Follow the Kitchen</h2>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span></div>
                                    <div class="text-center modeltheme_button wow no_animation instagram" style="visibility: hidden; animation-name: none;"><a href=""
                                                                                                                                                               class="button-winona extra-large btn_custom_6264557299edf"
                                                                                                                                                               style="background: #ffffff;color:#7124c4;"><i
                                                    class="fa fa-instagram"></i>Follow on Instagram</a></div>
                                    <div class="text-center modeltheme_button wow no_animation facebook" style="visibility: hidden; animation-name: none;"><a href=""
                                                                                                                                                              class="button-winona extra-large btn_custom_6264557299ef7"
                                                                                                                                                              style="background: #ffffff;color:#3b5999;"><i
                                                    class="fa fa-facebook"></i>Like on Facebook</a></div>
                                    <div class="text-center modeltheme_button wow no_animation youtube" style="visibility: hidden; animation-name: none;"><a href=""
                                                                                                                                                             class="button-winona extra-large btn_custom_6264557299f0a"
                                                                                                                                                             style="background: #ffffff;color:#f51c0d;"><i
                                                    class="fa fa-youtube-play"></i>Subscribe on YouTube</a></div>
                                    <div class="text-center modeltheme_button wow no_animation twitter" style="visibility: hidden; animation-name: none;"><a href=""
                                                                                                                                                             class="button-winona extra-large btn_custom_6264557299f1c"
                                                                                                                                                             style="background: #ffffff;color:#76a9ea;"><i
                                                    class="fa fa-twitter"></i>Follow on Twitter</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1575890105457 vc_row-has-fill"
         style="position: relative; left: -302.5px; box-sizing: border-box; width: 1775px; padding-left: 302.5px; padding-right: 302.5px;">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="title-subtile-holder  animateIn text_center" data-animate="fadeIn" style="opacity: 100;"><h1 style="color: #151515;" class="section-title custom_color">Main Course</h1>
                        <p style="color: #808080;" class="section-subtitle custom_color">Excepteur sint occaecat cupidatat non qui proident, sunt culpa qui officia deserunmollit anim id est laborum.</p></div>
                    <div class="vc_empty_space" style="height: 45px"><span class="vc_empty_space_inner"></span></div>
                    <div id="mt_ico_filters_626455729a6d7" class="iconfilter-shortcode-v2 second-version wow  " style="visibility: hidden; animation-name: none;">
                        <div class="row">
                            <div class="foodhub-main-content">
                                <section class="foodhub-gallery">
                                    <div class="col-md-12 iconfilter-listing">
                                        <div class="ico-cat-parent big-parent">
                                            <div class="col-md-4 row-3items  foodhub-single-list-item mix indian Beef Massaman Soup Marroc Style salads">
                                                <div class="blog_custom_listings">
                                                    <div class="listings_category_image_shortcode_holder">
                                                        <a class="relative" href="https://foodhub.modeltheme.com/recipe/beef-massaman-soup/"><img class="blog_post_image"
                                                                                                                                                  src="https://foodhub.modeltheme.com/wp-content/uploads/2019/11/recipe_massaman_soup-1-500x300.jpg"
                                                                                                                                                  alt="Beef Massaman Soup Marroc Style"></a>
                                                        <div class="foodhub-details">
                                                            <div class="listings_details">
                                                                <div class="foodhub-details-title ">
                                                                    <h4 class="post-name-listings"><a href="https://foodhub.modeltheme.com/recipe/beef-massaman-soup/">Beef Massaman Soup Marroc</a></h4>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 row-3items  foodhub-single-list-item mix italian Italian Tiramisu Vero Perro Wine salads">
                                                <div class="blog_custom_listings">
                                                    <div class="listings_category_image_shortcode_holder">
                                                        <a class="relative" href="https://foodhub.modeltheme.com/recipe/italian-tiramisu/"><img class="blog_post_image"
                                                                                                                                                src="https://foodhub.modeltheme.com/wp-content/uploads/2019/08/recipes-05-500x300.jpg"
                                                                                                                                                alt="Italian Tiramisu Vero Perro Wine"></a>
                                                        <div class="foodhub-details">
                                                            <div class="listings_details">
                                                                <div class="foodhub-details-title ">
                                                                    <h4 class="post-name-listings"><a href="https://foodhub.modeltheme.com/recipe/italian-tiramisu/">Italian Tiramisu Vero Perro</a></h4>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 row-3items last_item_row foodhub-single-list-item mix american Southern Fried Cabbage with Bacon salads">
                                                <div class="blog_custom_listings">
                                                    <div class="listings_category_image_shortcode_holder">
                                                        <a class="relative" href="https://foodhub.modeltheme.com/recipe/southern-fried-cabbage-with-bacon-mushrooms-and-onions/"><img class="blog_post_image"
                                                                                                                                                                                      src="https://foodhub.modeltheme.com/wp-content/uploads/2019/01/recipes-09-500x300.jpg"
                                                                                                                                                                                      alt="Southern Fried Cabbage with Bacon"></a>
                                                        <div class="foodhub-details">
                                                            <div class="listings_details">
                                                                <div class="foodhub-details-title ">
                                                                    <h4 class="post-name-listings"><a href="https://foodhub.modeltheme.com/recipe/southern-fried-cabbage-with-bacon-mushrooms-and-onions/">Southern
                                                                            Fried Cabbage with</a></h4>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1575889706057 vc_row-has-fill vc_row-no-padding"
         style="position: relative; left: -302.5px; box-sizing: border-box; width: 1775px;">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_grid-container-wrapper vc_clearfix">
                        <div class="vc_grid-container vc_clearfix wpb_content_element vc_masonry_media_grid" data-initial-loading-animation="zoomIn"
                             data-vc-grid-settings="{&quot;page_id&quot;:17869,&quot;style&quot;:&quot;all-masonry&quot;,&quot;action&quot;:&quot;vc_get_vc_grid_data&quot;,&quot;shortcode_id&quot;:&quot;1583750773369-62887f3b-f78a-8&quot;,&quot;tag&quot;:&quot;vc_masonry_media_grid&quot;}"
                             data-vc-request="https://foodhub.modeltheme.com/wp-admin/admin-ajax.php" data-vc-post-id="17869" data-vc-public-nonce="789bffed36">
                            <style data-type="vc_shortcodes-custom-css">.vc_custom_1419328603590 {
									background-color: rgba(255, 255, 255, 0.2) !important;
									*background-color: rgb(255, 255, 255) !important;
								}</style>
                            <style type="text/css">
								img.wp-smiley,
								img.emoji {
									display: inline !important;
									border: none !important;
									box-shadow: none !important;
									height: 1em !important;
									width: 1em !important;
									margin: 0 .07em !important;
									vertical-align: -0.1em !important;
									background: none !important;
									padding: 0 !important;
								}
                            </style>
                            <div class="vc_grid vc_row vc_pageable-wrapper vc_hook_hover" data-vc-pageable-content="true">
                                <div class="vc_pageable-slide-wrapper vc_clearfix" data-vc-grid-content="true" style="position: relative; height: 295.828px;">
                                    <div class="vc_grid-item vc_clearfix vc_col-sm-2 vc_visible-item" style="position: absolute; left: 0px; top: 0px;">
                                        <div class="vc_grid-item-mini vc_clearfix ">
                                            <div class="vc_gitem-animated-block  vc_gitem-animate vc_gitem-animate-fadeIn" data-vc-animation="fadeIn"
                                            "="">
                                            <div class="vc_gitem-zone vc_gitem-zone-a vc_gitem-is-link"
                                                 style="background-image: url('https://foodhub.modeltheme.com/wp-content/uploads/2019/02/recipes-16-240x240.jpg') !important;"><a
                                                        href="https://foodhub.modeltheme.com/recipe/tater-tot-taco-casserole/recipes-16/" title="recipes-16" class="vc_gitem-link vc-zone-link"></a><img
                                                        src="https://foodhub.modeltheme.com/wp-content/uploads/2019/02/recipes-16-240x240.jpg" class="vc_gitem-zone-img" alt="">
                                                <div class="vc_gitem-zone-mini"></div>
                                            </div>
                                            <div class="vc_gitem-zone vc_gitem-zone-b vc_custom_1419328603590 vc-gitem-zone-height-mode-auto vc_gitem-is-link"><a
                                                        href="https://foodhub.modeltheme.com/recipe/tater-tot-taco-casserole/recipes-16/" title="recipes-16" class="vc_gitem-link vc-zone-link"></a>
                                                <div class="vc_gitem-zone-mini"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_clearfix"></div>
                                </div>
                                <div class="vc_grid-item vc_clearfix vc_col-sm-2 vc_visible-item" style="position: absolute; left: 295px; top: 0px;">
                                    <div class="vc_grid-item-mini vc_clearfix ">
                                        <div class="vc_gitem-animated-block  vc_gitem-animate vc_gitem-animate-fadeIn" data-vc-animation="fadeIn"
                                        "="">
                                        <div class="vc_gitem-zone vc_gitem-zone-a vc_gitem-is-link"
                                             style="background-image: url('https://foodhub.modeltheme.com/wp-content/uploads/2019/02/recipes-17-240x240.jpg') !important;"><a
                                                    href="https://foodhub.modeltheme.com/recipe/american-french-onion-soup/recipes-17/" title="recipes-17" class="vc_gitem-link vc-zone-link"></a><img
                                                    src="https://foodhub.modeltheme.com/wp-content/uploads/2019/02/recipes-17-240x240.jpg" class="vc_gitem-zone-img" alt="">
                                            <div class="vc_gitem-zone-mini"></div>
                                        </div>
                                        <div class="vc_gitem-zone vc_gitem-zone-b vc_custom_1419328603590 vc-gitem-zone-height-mode-auto vc_gitem-is-link"><a
                                                    href="https://foodhub.modeltheme.com/recipe/american-french-onion-soup/recipes-17/" title="recipes-17" class="vc_gitem-link vc-zone-link"></a>
                                            <div class="vc_gitem-zone-mini"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_clearfix"></div>
                            </div>
                            <div class="vc_grid-item vc_clearfix vc_col-sm-2 vc_visible-item" style="position: absolute; left: 591px; top: 0px;">
                                <div class="vc_grid-item-mini vc_clearfix ">
                                    <div class="vc_gitem-animated-block  vc_gitem-animate vc_gitem-animate-fadeIn" data-vc-animation="fadeIn"
                                    "="">
                                    <div class="vc_gitem-zone vc_gitem-zone-a vc_gitem-is-link"
                                         style="background-image: url('https://foodhub.modeltheme.com/wp-content/uploads/2019/02/recipes-18-240x240.jpg') !important;"><a
                                                href="https://foodhub.modeltheme.com/recipe/delicious-ham-and-potato-soup/recipes-18/" title="recipes-18" class="vc_gitem-link vc-zone-link"></a><img
                                                src="https://foodhub.modeltheme.com/wp-content/uploads/2019/02/recipes-18-240x240.jpg" class="vc_gitem-zone-img" alt="">
                                        <div class="vc_gitem-zone-mini"></div>
                                    </div>
                                    <div class="vc_gitem-zone vc_gitem-zone-b vc_custom_1419328603590 vc-gitem-zone-height-mode-auto vc_gitem-is-link"><a
                                                href="https://foodhub.modeltheme.com/recipe/delicious-ham-and-potato-soup/recipes-18/" title="recipes-18" class="vc_gitem-link vc-zone-link"></a>
                                        <div class="vc_gitem-zone-mini"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_clearfix"></div>
                        </div>
                        <div class="vc_grid-item vc_clearfix vc_col-sm-2 vc_visible-item" style="position: absolute; left: 887px; top: 0px;">
                            <div class="vc_grid-item-mini vc_clearfix ">
                                <div class="vc_gitem-animated-block  vc_gitem-animate vc_gitem-animate-fadeIn" data-vc-animation="fadeIn"
                                "="">
                                <div class="vc_gitem-zone vc_gitem-zone-a vc_gitem-is-link"
                                     style="background-image: url('https://foodhub.modeltheme.com/wp-content/uploads/2019/02/recipes-14-240x240.jpg') !important;"><a
                                            href="https://foodhub.modeltheme.com/recipe/classic-vanilla-toffee-cake-with-milk-and-biological-flour-2/recipes-14/" title="recipes-14"
                                            class="vc_gitem-link vc-zone-link"></a><img src="https://foodhub.modeltheme.com/wp-content/uploads/2019/02/recipes-14-240x240.jpg" class="vc_gitem-zone-img" alt="">
                                    <div class="vc_gitem-zone-mini"></div>
                                </div>
                                <div class="vc_gitem-zone vc_gitem-zone-b vc_custom_1419328603590 vc-gitem-zone-height-mode-auto vc_gitem-is-link"><a
                                            href="https://foodhub.modeltheme.com/recipe/classic-vanilla-toffee-cake-with-milk-and-biological-flour-2/recipes-14/" title="recipes-14"
                                            class="vc_gitem-link vc-zone-link"></a>
                                    <div class="vc_gitem-zone-mini"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_clearfix"></div>
                    </div>
                    <div class="vc_grid-item vc_clearfix vc_col-sm-2 vc_visible-item" style="position: absolute; left: 1183px; top: 0px;">
                        <div class="vc_grid-item-mini vc_clearfix ">
                            <div class="vc_gitem-animated-block  vc_gitem-animate vc_gitem-animate-fadeIn" data-vc-animation="fadeIn"
                            "="">
                            <div class="vc_gitem-zone vc_gitem-zone-a vc_gitem-is-link" style="background-image: url('https://foodhub.modeltheme.com/wp-content/uploads/2019/02/recipes-15-240x240.jpg') !important;"><a
                                        href="https://foodhub.modeltheme.com/recipe/chocolate-cherry-scones/recipes-15/" title="recipes-15" class="vc_gitem-link vc-zone-link"></a><img
                                        src="https://foodhub.modeltheme.com/wp-content/uploads/2019/02/recipes-15-240x240.jpg" class="vc_gitem-zone-img" alt="">
                                <div class="vc_gitem-zone-mini"></div>
                            </div>
                            <div class="vc_gitem-zone vc_gitem-zone-b vc_custom_1419328603590 vc-gitem-zone-height-mode-auto vc_gitem-is-link"><a
                                        href="https://foodhub.modeltheme.com/recipe/chocolate-cherry-scones/recipes-15/" title="recipes-15" class="vc_gitem-link vc-zone-link"></a>
                                <div class="vc_gitem-zone-mini"></div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_clearfix"></div>
                </div>
                <div class="vc_grid-item vc_clearfix vc_col-sm-2 vc_visible-item" style="position: absolute; left: 1479px; top: 0px;">
                    <div class="vc_grid-item-mini vc_clearfix ">
                        <div class="vc_gitem-animated-block  vc_gitem-animate vc_gitem-animate-fadeIn" data-vc-animation="fadeIn"
                        "="">
                        <div class="vc_gitem-zone vc_gitem-zone-a vc_gitem-is-link" style="background-image: url('https://foodhub.modeltheme.com/wp-content/uploads/2019/01/recipes-21-240x240.jpg') !important;"><a
                                    href="https://foodhub.modeltheme.com/recipe/creamy-rice-pudding/recipes-21/" title="recipes-21" class="vc_gitem-link vc-zone-link"></a><img
                                    src="https://foodhub.modeltheme.com/wp-content/uploads/2019/01/recipes-21-240x240.jpg" class="vc_gitem-zone-img" alt="">
                            <div class="vc_gitem-zone-mini"></div>
                        </div>
                        <div class="vc_gitem-zone vc_gitem-zone-b vc_custom_1419328603590 vc-gitem-zone-height-mode-auto vc_gitem-is-link"><a
                                    href="https://foodhub.modeltheme.com/recipe/creamy-rice-pudding/recipes-21/" title="recipes-21" class="vc_gitem-link vc-zone-link"></a>
                            <div class="vc_gitem-zone-mini"></div>
                        </div>
                    </div>
                </div>
                <div class="vc_clearfix"></div>
            </div>
        </div>
    </div>

@endsection