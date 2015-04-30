<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('organisation_id')->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('function');
            $table->integer('active')->default(0);
            $table->string('confirmtoken');
            $table->rememberToken();
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
		Schema::drop('contacts');
	}

}
