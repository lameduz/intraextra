<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSettingsToDatabase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settings',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('organisation_id')->unsigned();
            $table->string('url');
            $table->string('logo');
            $table->string('footer');
            $table->timestamps();
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
		//
	}

}
