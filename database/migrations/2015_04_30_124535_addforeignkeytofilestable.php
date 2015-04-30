<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Addforeignkeytofilestable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('files', function(Blueprint $table)
		{
			$table->integer('organisation_id')->unsigned();
            $table->foreign('organisation_id')->references('id')->on('organisations')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('files', function(Blueprint $table)
		{
			//
		});
	}

}
