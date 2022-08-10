<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Traits\CRUDController;
use App\Repositories\CuisineRepository;
use App\Services\CuisineService;
use Illuminate\Http\Request;

class CuisineController extends Controller
{
	
	use CRUDController;
	
	private $viewFolder = 'cuisine';
	private $singleName = 'cuisine';
	private $arrName = 'cuisines';
	private $ListCollection = 'App\Http\Resources\ListCollections\CuisineListCollection';
	private $Resource = 'App\Http\Resources\CuisineResource';
	private $rout_all = 'dashboard-cuisine-all';
	
	/** @var CuisineService */
	private $service;
	/** @var CuisineRepository */
	private $repository;
	
	public function __construct(
		CuisineService $service,
		CuisineRepository $repository
	) {
		$this->service = $service;
		$this->repository = $repository;
	}
}
