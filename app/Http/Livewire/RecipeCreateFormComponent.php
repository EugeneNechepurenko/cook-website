<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Cuisine;
use App\Models\Difficulty;
use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\Step;
use App\Models\Tag;
use Illuminate\Filesystem\FilesystemAdapter;
use Livewire\Component;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Livewire\Livewire;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class RecipeCreateFormComponent extends Component
{
	use WithFileUploads;
	
//	public $text = '';
//	public $arr = [];
//
//	public function add()
//	{
//		$this->arr[] = $this->text;
//		$this->text = '';
//	}
//	public function del($item)
//	{
//		$id = array_search($item,$this->arr);
//		unset($this->arr[$id]);
//	}

	public $title = '';
	public $slug = '';
	public $category_id = '';
	public $difficulty_id = '';
	public $total_time = '';
	public $active_time = '';
	public $yields = '';
	public $kcal = '';
	public $price = '';
	public $cuisine_id = '';
	public $description = '';
	public $img = '';


	public $ingredient_title = '';
	public $ingredient_amount = '';
	public $ingredient_type = '';
	public $ingredients_arr = [];
	
	public function ingredient_add()
	{
		$this->ingredients_arr[] =[
			'title'=>$this->ingredient_title,
			'amount'=>$this->ingredient_amount,
			'type'=>$this->ingredient_type
		];
		$this->ingredient_title = '';
		$this->ingredient_amount = '';
		$this->ingredient_type = '';
	}
	public function ingredient_del($id)
	{
		unset($this->ingredients_arr[$id]);
		$this->ingredients_arr = array_values($this->ingredients_arr);
	}
	
	public $step_text = '';
	public $step_imgs = '';
	public $step_arr = [];
	public function step_add()
	{
		$this->step_arr[] =[
			'text'=>$this->step_text,
			'imgs'=>$this->step_imgs
		];
		$this->step_text = '';
		$this->step_imgs = '';
	}
	public function step_del($id)
	{
		unset($this->step_arr[$id]);
		$this->step_arr = array_values($this->step_arr);
	}
	
	public $tag_title = '';
	public $tag_arr = [];
	public function tag_add()
	{
		$this->tag_arr[] = $this->tag_title;
		$this->tag_title = '';
	}
	public function tag_del($item)
	{
		$id = array_search($item,$this->tag_arr);
		unset($this->tag_arr[$id]);
	}
	
	
	
	
	
	
	
	public function mount()
	{
//		$this->ingredient_type = ['gr','l',''];
	}
	
    public function render()
    {
		$category = Category::all();
		$difficulty = Difficulty::all();
		$cuisine = Cuisine::all();
//		$category = $this->workerRepository->list();
        return view('livewire.recipe-create-form-component',[
			'category'=>$category,
			'difficulty'=>$difficulty,
			'cuisine'=>$cuisine,
		]);
    }
	
	
//	public $name;
//	public $email;
	
//	protected $rules = [
//		'name' => 'required|min:6',
//		'email' => 'required|email',
//	];
	
//	public function updated($propertyName)
//	{
//		$this->validateOnly($propertyName);
//	}
	
	public function generateSlug()
	{
		$this->slug = SlugService::createSlug(Recipe::class, 'slug', $this->title);
	}
	
	public function submit()
	{
//		$this->validate();
		
		$ingredients = [];
		for($i=0;$i<sizeof($this->ingredients_arr);$i++){
			$ingredients[] = Ingredient::create(
				$this->ingredients_arr[$i]
			)->id;
		}
		$steps = [];
//		var_dump($this->step_arr);
		for($i=0;$i<sizeof($this->step_arr);$i++){
			$step = Step::create(['text'=>$this->step_arr[$i]['text']]);
			$img = $this->step_arr[$i]['imgs'];
			echo '<br>';
			$step->addMediaFromStream($img->readStream())->setFileName($img->getFilename())->toMediaCollection('img');
//			$img->delete();
			$steps[] = $step->id;
		}
		$tags = [];
		for($i=0;$i<sizeof($this->tag_arr);$i++){
			$tags[] = Tag::create([
				'title'=>$this->tag_arr[$i]]
			)->id;
		}
		$this->generateSlug();
		$recipe = Recipe::create([
			'title'=>$this->title,
			'slug'=>$this->slug,
//			'img'=>'',
			'total_time'=>$this->total_time,
			'active_time'=>$this->active_time,
			'yields'=>$this->yields,
			'kcal'=>$this->kcal,
			'price'=>$this->price,
			'description'=>$this->description,
			'category_id'=>$this->category_id,
			'difficulty_id'=>$this->difficulty_id,
			'cuisine_id'=>$this->cuisine_id,
		]);
		
		if($this->img) {
			/* @var $img TemporaryUploadedFile */
			$img = $this->img;
			$recipe->addMediaFromStream($img->readStream())->setFileName($img->getFilename())->toMediaCollection('img');
//			$img->delete();
		}
		if($ingredients) {
			$recipe->ingredients()->attach($ingredients);
		}
		if($steps) {
			$recipe->steps()->attach($steps);
		}
		
		if($tags) {
			$recipe->tags()->attach($tags);
		}
		dd($recipe);
//		dd($this->all());
	}
}
