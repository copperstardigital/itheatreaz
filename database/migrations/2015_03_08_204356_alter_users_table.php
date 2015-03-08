<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('users', function(Blueprint $table)
        {
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->dropColumn('name');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('users', function(Blueprint $table)
        {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->string('name');
        });
	}

}
