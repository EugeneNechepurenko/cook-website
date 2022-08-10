<?php
	
	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Support\Facades\Schema;
	
	class CreateRecipesIngredientTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('recipes_ingredient', function (Blueprint $table) {
				$table->id();
				$table->foreignIdFor(\App\Models\Recipe::class);
				$table->foreignIdFor(\App\Models\Ingredient::class);
				$table->timestamps();
			});
		}
		
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::dropIfExists('recipes_ingredient');
		}
	}
