<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactSitePivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contact_site', function(Blueprint $table)
		{
			$table->integer('contact_id')->unsigned()->index();
			$table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
			$table->integer('site_id')->unsigned()->index();
			$table->foreign('site_id')->references('id')->on('sites')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contact_site');
	}

}
