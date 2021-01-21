<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('col_1')->nullable();
            $table->text('col_2')->nullable();
            $table->text('col_3')->nullable();
            $table->text('col_4')->nullable();
            $table->text('col_5')->nullable();
            $table->text('col_6')->nullable();
            $table->text('col_7')->nullable();
            $table->text('col_8')->nullable();
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
        Schema::dropIfExists('packages');
    }
}
