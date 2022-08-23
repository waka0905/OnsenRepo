<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressColumnToSytesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sytes', function (Blueprint $table) {
            $table->string('address', 100)->nullable();
            $table->string('nearest', 100)->nullable();
            $table->string('price', 100)->nullable();
            $table->string('time', 100)->nullable();
            $table->string('close', 100)->nullable();
            $table->string('bus', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sytes', function (Blueprint $table) {
            //
        });
    }
}
