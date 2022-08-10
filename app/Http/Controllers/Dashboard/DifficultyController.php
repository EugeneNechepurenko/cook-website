<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Traits\CRUDController;
use App\Repositories\DifficultyRepository;
use App\Services\DifficultyService;
use Illuminate\Http\Request;

class DifficultyController extends Controller
{
	use CRUDController;
	
	private $viewFolder = 'difficulty';
	private $singleName = 'difficulty';
	private $arrName = 'difficulties';
	private $ListCollection = 'App\Http\Resources\ListCollections\DifficultyListCollection';
	private $Resource = 'App\Http\Resources\DifficultyResource';
	private $rout_all = 'dashboard-difficulty-all';
	
	/** @var DifficultyService */
	private $service;
	/** @var DifficultyRepository */
	private $repository;
	
	public function __construct(
		DifficultyService $service,
		DifficultyRepository $repository
	) {
		$this->service = $service;
		$this->repository = $repository;
	}
}
