<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrewProductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crew_production', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('production_id')->unsigned();
            $table->string('roles')->nullable();
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
        Schema::drop('crew_production');
    }
}
