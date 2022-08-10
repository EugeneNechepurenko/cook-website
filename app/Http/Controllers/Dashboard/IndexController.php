<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __construct(){}
	
	public function index(){
		return view('/dashboard/pages/index');
	}
}
