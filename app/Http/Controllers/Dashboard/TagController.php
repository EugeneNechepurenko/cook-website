<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Traits\CRUDController;
use App\Repositories\TagRepository;
use App\Services\TagService;
use Illuminate\Http\Request;

class TagController extends Controller
{
	use CRUDController;
	
	private $viewFolder = 'tag';
	private $singleName = 'tag';
	private $arrName = 'tags';
	private $ListCollection = 'App\Http\Resources\ListCollections\TagListCollection';
	private $Resource = 'App\Http\Resources\TagResource';
	private $rout_all = 'dashboard-tag-all';
	
	/** @var TagService */
	private $service;
	/** @var TagRepository */
	private $repository;
	
	public function __construct(
		TagService $service,
		TagRepository $repository
	) {
		$this->service = $service;
		$this->repository = $repository;
	}
}
