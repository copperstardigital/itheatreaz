<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::dropIfExists('comments');
        Schema::create('comments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('production_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->text('comment');
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
        Schema::drop('comments');
    }

}
