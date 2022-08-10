<?php
	
	namespace App\Models;
	
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\Relations\HasMany;
	
	/**
	 * @property int         $id
	 * @property string      $title
	 * @property string      $amount
	 * @property string      $type
	 */
	class Ingredient extends Model
	{
		/**
		 * @var array
		 */
		protected $fillable = [
			'title',
			'amount',
			'type',
		];
		protected $table = 'ingredient';
		
		public function recipes(): HasMany
		{
			return $this->hasMany(Recipe::class);
		}
	}
