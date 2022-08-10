<?php
	
	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Support\Facades\Schema;
	
	class CreateRecipesMediaTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('recipes_media', function (Blueprint $table) {
				$table->id();
				$table->foreignIdFor(\App\Models\Recipe::class);
				$table->foreignIdFor(\App\Models\Media::class);
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
			Schema::dropIfExists('recipes_media');
		}
	}
