<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Traits\CRUDController;
use App\Models\Recipe;
use App\Repositories\RecipeRepository;
use App\Services\RecipeService;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RecipesController extends Controller
{
	use CRUDController;
	
	private $viewFolder = 'recipe';
	private $singleName = 'recipe';
	private $arrName = 'recipes';
	private $ListCollection = 'App\Http\Resources\ListCollections\RecipeListCollection';
	private $Resource = 'App\Http\Resources\RecipeResource';
	private $rout_all = 'dashboard-recipes-all';
	
	/** @var RecipeService */
	private $service;
	/** @var RecipeRepository */
	private $repository;
	
	public function __construct(
		recipeService $service,
		recipeRepository $repository
	) {
		$this->service = $service;
		$this->repository = $repository;
	}

	public function check_valid(Request $request){
		$slug = SlugService::createSlug(Recipe::class, 'slug', $request->get('title'));
		$validator = Validator::make(['title'=>$request->get('title'),'slug'=>$slug], [
		'title' => 'required|unique:recipes',
		'slug' => 'required|unique:recipes'
		]);
		if($validator->fails()) {
			return response('false');
		}
		return response('true');
	}

}
