<?php
	
	namespace App\Models;
	
	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\Relations\HasMany;
	
	/**
	 * @property int         $id
	 * @property string      $title
	 */
	class Tag extends Model
	{
		/**
		 * @var array
		 */
		protected $fillable = [
			'title',
		];
		protected $table = 'tag';
		
		public function recipes(): HasMany
		{
			return $this->hasMany(Recipe::class);
		}
	}
