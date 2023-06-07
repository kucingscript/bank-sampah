<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //add column username
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 255)->after('name');     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop column username
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
        });
    }
};
