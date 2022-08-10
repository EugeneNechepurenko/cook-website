<?php

namespace App\Models;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property int         $id
 * @property string      $title
 * @property int         $category_id
 * @property Category    $category
 * @property string      $total_time
 * @property string      $active_time
 * @property int      	 $difficulty_id
 * @property Difficulty  $difficulty
 * @property string      $yields
 * @property string      $kcal
 * @property string      $price
 * @property int      	 $cuisine_id
 * @property Cuisine     $cuisine
 * @property string      $description
 * @property Ingredient      $ingredients
 * @property string      $steps
 * @property string      $img
// * @property Media      $media
 * @property Tag         $tags
 * @property Carbon      $created_at
 * @property Carbon      $updated_at
 */
class Recipe extends Model implements HasMedia
{
	use HasFactory,Sluggable, InteractsWithMedia;
    /**
     * @var array
     */
    protected $fillable = [
		'category_id',
		'difficulty_id',
		'cuisine_id',
		
		'title',
		'slug',
		
        'total_time',
        'active_time',
        'yields',
        'kcal',
        'price',
        'description',
        'img',
    ];
	public function sluggable(): array
	{
		return [
			'slug' => [
				'source' => 'title'
			]
		];
	}
	
	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}
	
	public function difficulty(): BelongsTo
	{
		return $this->belongsTo(Difficulty::class);
	}
	
	public function cuisine(): BelongsTo
	{
		return $this->belongsTo(Cuisine::class);
	}
	
	public function tags(): BelongsToMany
	{
		return $this->BelongsToMany(Tag::class);
	}
	
//	public function medias(): BelongsToMany
//	{
//		return $this->BelongsToMany(Media::class);
//	}
	
	public function ingredients(): BelongsToMany
	{
		return  $this->BelongsToMany(Ingredient::class);
	}
	
	public function steps(): BelongsToMany
	{
		return  $this->BelongsToMany(Step::class);
	}
}
