<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contact')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('logo')->nullable();
            $table->text('main_image');
            $table->text('main_image_content_one')->nullable();
            $table->text('main_image_content_two')->nullable();
            $table->text('main_image_content_three')->nullable();
            $table->text('main_image_content_four')->nullable();

            $table->integer('section_two_status')->default(0);
            $table->text('section_two_short_heading')->nullable();
            $table->text('section_two_main_heading')->nullable();
            $table->integer('section_two_content_one_id')->nullable();
            $table->integer('section_two_content_two_id')->nullable();
            $table->integer('section_two_content_three_id')->nullable();

            $table->integer('section_three_status')->default(0);
            $table->text('section_three_short_heading')->nullable();
            $table->text('section_three_main_heading')->nullable();
            $table->text('section_three_image')->nullable();
            $table->text('section_three_about')->nullable();

            $table->integer('section_four_status')->default(0);
            $table->text('section_four_short_heading')->nullable();
            $table->text('section_four_main_heading')->nullable();
            $table->integer('section_four_content_one_id')->nullable();
            $table->integer('section_four_content_two_id')->nullable();
            $table->integer('section_four_content_three_id')->nullable();
            $table->integer('section_four_content_four_id')->nullable();
            $table->integer('section_four_content_five_id')->nullable();
            $table->integer('section_four_content_six_id')->nullable();

            $table->integer('section_five_status')->default(0);
            $table->text('section_five_short_heading')->nullable();
            $table->text('section_five_main_heading')->nullable();
            $table->integer('section_five_package_one_id')->nullable();
            $table->integer('section_five_package_two_id')->nullable();
            $table->integer('section_five_package_three_id')->nullable();

            $table->integer('section_six_status')->default(0);
            $table->text('section_six_short_heading')->nullable();
            $table->text('section_six_main_heading')->nullable();

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
        Schema::dropIfExists('home_pages');
    }
}
