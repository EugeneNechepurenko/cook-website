<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Traits\CRUDController;
use App\Repositories\CategoryRepository;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	
	use CRUDController;
	
	private $viewFolder = 'category';
	private $singleName = 'category';
	private $arrName = 'categories';
	private $ListCollection = 'App\Http\Resources\ListCollections\CategoryListCollection';
	private $Resource = 'App\Http\Resources\CategoryResource';
	private $rout_all = 'dashboard-category-all';
	
	/** @var CategoryService */
	private $service;
	/** @var CategoryRepository */
	private $repository;
	
	public function __construct(
		CategoryService $service,
		CategoryRepository $repository
	) {
		$this->service = $service;
		$this->repository = $repository;
	}
	
	
	public function create(Request $request)
	{
		$data = $this->service->create($request->all());
//		$data->addMediaFromUrl()
		if($request->hasFile('img') && $request->file('img')->isValid()){
			$data->addMediaFromRequest('img')->toMediaCollection('img');
		}
//		return redirect()->route('client');
		
		return redirect(route($this->rout_all));
	}
}
