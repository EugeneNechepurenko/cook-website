<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Traits\CRUDController;
use App\Repositories\IngredientRepository;
use App\Services\IngredientService;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
	
	use CRUDController;
	
	private $viewFolder = 'ingredient';
	private $singleName = 'ingredient';
	private $arrName = 'ingredients';
	private $ListCollection = 'App\Http\Resources\ListCollections\IngredientListCollection';
	private $Resource = 'App\Http\Resources\IngredientResource';
	private $rout_all = 'dashboard-ingredient-all';
	
	/** @var IngredientService */
	private $service;
	/** @var IngredientRepository */
	private $repository;
	
	public function __construct(
		IngredientService $service,
		IngredientRepository $repository
	) {
		$this->service = $service;
		$this->repository = $repository;
	}
}
