<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSytesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sytes', function (Blueprint $table) {
           $table->increments('id');
            $table->string('name', 50);
            $table->string('sauna', 50);
            $table->string('ganban', 50);
            $table->string('tansan', 50);
            $table->string('restaurant', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sytes');
    }
}
