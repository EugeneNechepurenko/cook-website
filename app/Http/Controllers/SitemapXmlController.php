<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
	
	public function index() {
		$posts = Recipe::all();
		$posts1 = Category::all();
		return response()->view('sitemapXml', [
			'posts' => $posts,
			'posts1' => $posts1
		])->header('Content-Type', 'text/xml');
	}
}
