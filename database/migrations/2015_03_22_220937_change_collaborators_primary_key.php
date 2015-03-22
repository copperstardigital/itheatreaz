<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeCollaboratorsPrimaryKey extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('collaborators', function(Blueprint $table)
        {
            $table->renameColumn('collaborator_id', 'id');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('collaborators', function(Blueprint $table)
        {
            $table->renameColumn('collaborator_id', 'id');
        });
	}

}
