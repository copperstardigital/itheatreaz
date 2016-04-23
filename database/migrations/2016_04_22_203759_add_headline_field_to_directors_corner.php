<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHeadlineFieldToDirectorsCorner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('directors_corners', function (Blueprint $table) {
            $table->string('headline')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('directors_corners', function (Blueprint $table) {
            $table->dropColumn('headline');
        });
    }
}
