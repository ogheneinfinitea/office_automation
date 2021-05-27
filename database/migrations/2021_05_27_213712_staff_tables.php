<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StaffTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_tables', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('address');
            $table->string('next_of_kin_name');
            $table->string('next_of_kin_phone');
            $table->string('next_of_kin_address');
            $table->string('next_of_kin_email')->unique();
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_tables');
    }
}
