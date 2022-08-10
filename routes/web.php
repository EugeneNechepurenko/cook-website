<?php
	
	use App\Http\Controllers\AboutController;
	use App\Http\Controllers\AccountController;
	use App\Http\Controllers\BlogController;
	use App\Http\Controllers\Dashboard\CategoryController;
	use App\Http\Controllers\Dashboard\CuisineController;
	use App\Http\Controllers\Dashboard\DifficultyController;
	use App\Http\Controllers\Dashboard\IngredientController;
	use App\Http\Controllers\Dashboard\MediaController;
	use App\Http\Controllers\Dashboard\TagController;
	use App\Http\Controllers\Dashboard\UsersController;
	use App\Http\Controllers\DrinksController;
	use App\Http\Controllers\HomeController;
	use App\Http\Controllers\RecipesController;
	use App\Http\Controllers\SearchController;
	use App\Http\Controllers\Dashboard\BlogController as DashboardBlogController;
	use App\Http\Controllers\Dashboard\RecipesController as DashboardRecipesController;
	use App\Http\Controllers\Dashboard\DrinksController as DashboardDrinksController;
	use App\Http\Controllers\Dashboard\BlogController as DashboardUsersController;
	use App\Http\Controllers\SitemapXmlController;
	use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
	
	Route::name('home.')->controller(HomeController::class)->group(function(){
		Route::get('/','index')->name('index');
		Route::get('/category/{id}','category')->name('category');
	});
	Route::name('blog.')->prefix('/blog')->controller(BlogController::class)->group(function(){
		Route::get('/','index')->name('index');
	});
	Route::name('recipes.')->prefix('/recipes')->controller(RecipesController::class)->group(function(){
		Route::get('/{slug}','index')->name('index')->where('slug', '[A-Za-z0-9\-]+');
	});
	Route::name('drinks.')->prefix('/drinks')->controller(DrinksController::class)->group(function(){
		Route::get('/','index')->name('index');
	});
	Route::name('about.')->prefix('/about')->controller(AboutController::class)->group(function(){
		Route::get('/','index')->name('index');
	});
	Route::name('account.')->prefix('/account')->controller(AccountController::class)->group(function(){
		Route::get('/','index')->name('index');
	});
	Route::name('search.')->prefix('/search')->controller(SearchController::class)->group(function(){
		Route::get('/','index')->name('index');
	});
	
	/*
	Route::name('dashboard.')->namespace('Dashboard')->prefix('dashboard')->
//	middleware(['auth'])->
	group(function () {
		Route::prefix('/blog')->controller(DashboardBlogController::class)->group(function(){
			Route::get('/','index');
		});
		Route::prefix('/recipes')->controller(DashboardRecipesController::class)->group(function(){
			Route::get('/','index');
		});
		Route::prefix('/drinks')->controller(DashboardDrinksController::class)->group(function(){
			Route::get('/','index');
		});
		Route::prefix('/users')->controller(DashboardUsersController::class)->group(function(){
			Route::get('/','index');
		});
	});
	*/
	
	Route::get('/dashboard/sign-in', ['uses' => 'App\Http\Controllers\Dashboard\AuthController@signIn','as' => 'dashboard-auth-signin']);
	Route::post('/dashboard/sign-in-post', ['uses' => 'App\Http\Controllers\Dashboard\AuthController@signInPost','as' => 'dashboard-auth-signin-post']);
	
	Route::prefix('dashboard')->group(function () {
		Route::get('/', ['uses' => 'App\Http\Controllers\Dashboard\IndexController@index','as' => 'dashboard-home'])->middleware('auth');
	});
	Route::group(['prefix' => 'dashboard','namespace' => 'App\Http\Controllers\Dashboard'], function () use ($router) {
		Route::group(['prefix' => 'recipes'], function () use ($router) {
			Route::get('/all', ['uses' => 'RecipesController@all','as' => 'dashboard-recipes-all'])->middleware('auth');
			Route::get('/{id}/edit', ['uses' => 'RecipesController@edit','as' => 'dashboard-recipes-edit'])->middleware('auth');
			Route::get('/add', ['uses' => 'RecipesController@add','as' => 'dashboard-recipes-add'])->middleware('auth');
			Route::post('/create', ['uses' => 'RecipesController@create','as' => 'dashboard-recipes-create'])->middleware('auth');
			Route::get('/check-valid', ['uses' => 'RecipesController@check_valid','as' => 'dashboard-recipes-check_valid'])->middleware('auth');
			Route::post('/{id}/update', ['uses' => 'RecipesController@update','as' => 'dashboard-recipes-update'])->middleware('auth');
			Route::get('/{id}/delete', ['uses' => 'RecipesController@delete','as' => 'dashboard-recipes-delete'])->middleware('auth');
		});
	});
	
	
	
	Route::group(['prefix' => 'dashboard'], function () use ($router) {
		Route::name('dashboard-category-')->prefix('category')->controller(CategoryController::class)->middleware('auth')->group(function(){
			Route::get( '/all', 		'all')		->name('all');
			Route::get( '/{id}/edit', 	'edit')		->name('edit');
			Route::get( '/add', 		'add')		->name('add');
			Route::post('/create', 		'create')		->name('create');
			Route::post('/{id}/update', 'update')		->name('update');
			Route::get( '/{id}/delete', 'delete')		->name('delete');
		});
		Route::name('dashboard-cuisine-')->prefix('cuisine')->controller(CuisineController::class)->middleware('auth')->group(function(){
			Route::get( '/all', 		'all')		->name('all');
			Route::get( '/{id}/edit', 	'edit')		->name('edit');
			Route::get( '/add', 		'add')		->name('add');
			Route::post('/create', 		'create')		->name('create');
			Route::post('/{id}/update', 'update')		->name('update');
			Route::get( '/{id}/delete', 'delete')		->name('delete');
		});
		Route::name('dashboard-difficulty-')->prefix('difficulty')->controller(DifficultyController::class)->middleware('auth')->group(function(){
			Route::get( '/all', 		'all')		->name('all');
			Route::get( '/{id}/edit', 	'edit')		->name('edit');
			Route::get( '/add', 		'add')		->name('add');
			Route::post('/create', 		'create')		->name('create');
			Route::post('/{id}/update', 'update')		->name('update');
			Route::get( '/{id}/delete', 'delete')		->name('delete');
		});
		Route::name('dashboard-ingredient-')->prefix('ingredient')->controller(IngredientController::class)->middleware('auth')->group(function(){
			Route::get( '/all', 		'all')		->name('all');
			Route::get( '/{id}/edit', 	'edit')		->name('edit');
			Route::get( '/add', 		'add')		->name('add');
			Route::post('/create', 		'create')		->name('create');
			Route::post('/{id}/update', 'update')		->name('update');
			Route::get( '/{id}/delete', 'delete')		->name('delete');
		});
		Route::name('dashboard-tag-')->prefix('tag')->controller(TagController::class)->middleware('auth')->group(function(){
			Route::get( '/all', 		'all')		->name('all');
			Route::get( '/{id}/edit', 	'edit')		->name('edit');
			Route::get( '/add', 		'add')		->name('add');
			Route::post('/create', 		'create')		->name('create');
			Route::post('/{id}/update', 'update')		->name('update');
			Route::get( '/{id}/delete', 'delete')		->name('delete');
		});
//		Route::name('dashboard-users-')->prefix('users')->controller(UsersController::class)->middleware('auth')->group(function(){
//			Route::get( '/all', 		'all')		->name('all');
//			Route::get( '/{id}/edit', 	'edit')		->name('edit');
//			Route::get( '/add', 		'add')		->name('add');
//			Route::post('/create', 		'create')		->name('create');
//			Route::post('/{id}/update', 'update')		->name('update');
//			Route::get( '/{id}/delete', 'delete')		->name('delete');
//		});
		
	});
	
	
	
	
	
	
	Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);
	
	
	
	//	Route::name('auth.')->controller(AuthController::class)->group(function(){
	//		Route::get('/sign-in','signIn')->name('signIn');
	//		Route::get('/sign-up','signUp')->name('signUp');
	//		Route::get('/sign-out','signOut')->name('signOut');
	//		Route::get('/forgot-password','forgotPassword')->name('forgotPassword');
	//	});
	
	/*
	
	top menu
	-home
	-blog
	-recipes
	-drinks
	-about
	-my account
	-search line
	
	
	home
		-menu
		-banner
		-popular recipes
		-popular categories
		-CTA - subscribe/sign up
		-Latest Recipes
		-Lates article & news
		-footer
	calculator
	recipes
		-list
		-popular
		-most comented
		search
			-filter
	posts
		-list
		-popular
		-most comented
		search
			-filter
	about us
		-description
		-contact form
	registration (email,gmail,facebook,twitter)
	login (email,gmail,facebook,twitter)
	account
		-saved
		-comments
		
	soon
	account
		-add recipe
		-add post
	
	
	
	
	 */