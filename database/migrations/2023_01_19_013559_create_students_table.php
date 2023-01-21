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
    //to insert data in table
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('name');
            $table->string('time');
            $table->string('mahallah');
            $table->string('position');
            $table->string('phoneNo');
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
        Schema::dropIfExists('students');
    }
};
