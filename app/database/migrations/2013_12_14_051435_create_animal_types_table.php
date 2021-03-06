<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('animal_types', function(Blueprint $table)
		{
			$table->increments('id');
	        $table->string('name')->unique();
	        $table->text('description');
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
		Schema::table('animal_types', function(Blueprint $table)
		{
			Schema::drop('animal_types');
		});
	}

}