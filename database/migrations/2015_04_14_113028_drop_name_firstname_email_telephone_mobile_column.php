<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropNameFirstnameEmailTelephoneMobileColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('organisations', function(Blueprint $table)
		{
			$table->dropColumn(['name', 'firstname', 'email', 'telephone','mobile']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('organisations', function(Blueprint $table)
		{
			//
		});
	}

}
