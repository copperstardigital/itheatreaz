<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaywrightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playwrights', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('production_id')->unsigned();
            $table->text('bio');
            $table->timestamps();

            $table->primary(['user_id', 'production_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('playwrights');
    }
}
