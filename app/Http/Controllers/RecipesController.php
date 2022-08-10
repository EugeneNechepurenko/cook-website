<?php

namespace App\Http\Controllers;

use App\Http\Resources\RecipeResource;
use App\Models\Recipe;
use App\Repositories\RecipeRepository;
use App\Services\RecipeService;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
	
	
	/** @var RecipeService */
	private $recipeService;
	/** @var RecipeRepository */
	private $recipeRepository;
	
	public function __construct(
		RecipeService $recipeService,
		RecipeRepository $recipeRepository
	) {
		$this->recipeService = $recipeService;
		$this->recipeRepository = $recipeRepository;
	}
	
	
	public function index(Request $request, $slug){
		$recipe = Recipe::firstWhere('slug',$slug);
		if(!$recipe){
			return response('404',404);
		}
//		dd($recipe->steps[0]->getFirstMediaUrl('img'));
//		dd(new RecipeResource($recipe));
		return view('website.pages.recipe-single',[
			'recipe'=>new RecipeResource($recipe)
		]);
	}
}
