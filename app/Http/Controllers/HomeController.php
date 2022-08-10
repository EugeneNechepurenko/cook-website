<?php

namespace App\Http\Controllers;

use App\Http\Resources\ListCollections\CategoryListCollection;
use App\Http\Resources\ListCollections\RecipeListCollection;
use App\Repositories\CategoryRepository;
use App\Repositories\RecipeRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/** @var CategoryRepository */
	private $categoryRepository;
	/** @var RecipeRepository */
	private $recipeRepository;
	public function __construct(
		CategoryRepository $categoryRepository,
		RecipeRepository $recipeRepository
	) {
		$this->categoryRepository = $categoryRepository;
		$this->recipeRepository = $recipeRepository;
	}
	
	
    public function index(){
	
		$data = $this->categoryRepository->list();
		$cats = new CategoryListCollection($data);
		
		
		return view('website.pages.home', [
			'categories'=>$cats,
		]);
	}
	
    public function category(Request $request, $id){
	
		$category = $this->categoryRepository->find($id);
		if(!$category){
			return response('404',404);
		}
		$recipes = $this->recipeRepository->findByCategory(['category_id'=>$id]);
		$recipes = new RecipeListCollection($recipes);
		return view('website.pages.recipes', [
			'category'=>$category,
			'recipes'=>$recipes,
		]);
	}
}
