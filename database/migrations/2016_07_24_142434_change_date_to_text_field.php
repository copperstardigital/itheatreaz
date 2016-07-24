<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDateToTextField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('productions', function (Blueprint $table) {
            DB::statement('ALTER TABLE productions MODIFY COLUMN dates TEXT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productions', function (Blueprint $table) {
            DB::statement('ALTER TABLE production MODIFY COLUMN dates VARCHAR(255)');
        });
    }
}
