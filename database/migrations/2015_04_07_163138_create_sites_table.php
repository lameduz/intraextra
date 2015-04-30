<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sites', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('organisation_id')->unsigned();
			$table->mediumText('building');
			$table->integer('floor');
			$table->integer('siref');
			$table->string('adress_1');
			$table->string('adress_2');
			$table->integer('zipcode');
			$table->string('city');
			$table->string('country');
			$table->timestamps();
		});

		Schema::table('sites', function($table)
		{
			$table->foreign('organisation_id')->references('id')->on('organisations');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sites');
	}

}
