<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
			$table->string('title')->nullable();
//			$table->string('category')->nullable();
			$table->foreignIdFor(\App\Models\Category::class)->nullable();
			$table->string('total_time')->nullable();
			$table->string('active_time')->nullable();
//			$table->string('difficulty')->nullable();
			$table->foreignIdFor(\App\Models\Difficulty::class)->nullable();
			$table->string('yields')->nullable();
			$table->string('kcal')->nullable();
			$table->string('price')->nullable();
//			$table->string('cuisine')->nullable();
			$table->foreignIdFor(\App\Models\Cuisine::class)->nullable();
			$table->string('description')->nullable();
//			$table->string('ingredients')->nullable();
//			$table->foreignIdFor(\App\Models\Ingredient::class)->nullable();
//			$table->string('steps')->nullable();
			$table->string('img')->nullable();
//			$table->string('media')->nullable();
//			$table->string('tags')->nullable();
//			$table->foreignIdFor(\App\Models\Tag::class)->nullable();
            $table->timestamps();
			
//			$table->string('author');
//			$table->string('related');
//			$table->string('rating');
//			$table->string('comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
