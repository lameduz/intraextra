<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('organisations', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->mediumText('org_name');
			$table->mediumText('org_type');
			$table->integer('org_siren');
			$table->string('org_ape_naf');
			$table->string('name');
			$table->string('firstname');
			$table->string('email')->unique();
			$table->integer('telephone');
			$table->integer('mobile');
			$table->string('adress_1');
			$table->string('adress_2');
			$table->integer('zipcode');
			$table->string('city');
			$table->string('country');
			$table->string('bic');
			$table->string('iban');
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
		Schema::drop('organisations');
	}

}
