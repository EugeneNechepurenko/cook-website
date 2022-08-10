<?php
	
	namespace App\Models;
	
	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\Relations\HasMany;
	use Spatie\MediaLibrary\HasMedia;
	use Spatie\MediaLibrary\InteractsWithMedia;
	
	/**
	 * @property int         $id
	 * @property string      $text
	 * @property string      $img
	 */
	class Step extends Model implements HasMedia
	{
		use HasFactory, InteractsWithMedia;
		/**
		 * @var array
		 */
		protected $fillable = [
			'text',
			'img',
		];
		
		public function recipes(): HasMany
		{
			return $this->hasMany(Recipe::class);
		}
	}
