<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeSeasonsPrimaryKey extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('seasons', function(Blueprint $table)
        {
            $table->renameColumn('season_id', 'id');
        });
        Schema::table('productions', function(Blueprint $table)
        {
            $table->renameColumn('production_id', 'id');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('seasons', function(Blueprint $table)
        {
            $table->renameColumn('id', 'season_id');
        });
        Schema::table('productions', function(Blueprint $table)
        {
            $table->renameColumn('id', 'production_id');
        });
	}

}
