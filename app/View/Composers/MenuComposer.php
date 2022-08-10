<?php
	
	namespace App\View\Composers;
	
	use App\Http\Resources\ListCollections\CategoryListCollection;
	use App\Repositories\CategoryRepository;
	use App\Repositories\UserRepository;
	use Illuminate\View\View;
	
	class MenuComposer
	{
		/**
		 * The user repository implementation.
		 *
		 * @var \App\Repositories\CategoryRepository
		 */
		protected $categoryRepository;
		
		/**
		 * Create a new profile composer.
		 *
		 * @param  \App\Repositories\CategoryRepository  $categoryRepository
		 * @return void
		 */
		public function __construct(CategoryRepository $categoryRepository)
		{
			$this->categoryRepository = $categoryRepository;
		}
		
		/**
		 * Bind data to the view.
		 *
		 * @param  \Illuminate\View\View  $view
		 * @return void
		 */
		public function compose(View $view)
		{
			$data = $this->categoryRepository->list();
			$menu_categories = new CategoryListCollection($data);
			$view->with('menu_categories', $menu_categories);
		}
	}