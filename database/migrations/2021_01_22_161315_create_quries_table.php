<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('du-main.qureys', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('area_name')->nullable();
            $table->string('building_no')->nullable();
            $table->bigInteger('contact_no')->nullable();
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
        Schema::dropIfExists('quries');
    }
}
