<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFilesTableToDatabase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	public function up()
	{
        Schema::create('files', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('organisation_id')->unsigned();
            $table->string('name');
            $table->string('mime');
            $table->string('orginalname');
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
        Schema::drop('files');
	}

}
