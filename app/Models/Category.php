<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property int         $id
 * @property string      $title
 */
class Category extends Model implements HasMedia
{
	use HasFactory, InteractsWithMedia;
    /**
     * @var array
     */
    protected $fillable = [
        'title',
    ];
    /**
     * @var array
     */
    protected $table = 'category';
	
	public function recipes(): HasMany
	{
		return $this->hasMany(Recipe::class);
	}
}
