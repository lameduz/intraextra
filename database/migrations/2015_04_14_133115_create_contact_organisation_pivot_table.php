<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactOrganisationPivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_organisation', function(Blueprint $table)
		{
			$table->integer('contact_id')->unsigned()->index();
			$table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
			$table->integer('organisation_id')->unsigned()->index();
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
		Schema::drop('contact_organisation');
	}

}
