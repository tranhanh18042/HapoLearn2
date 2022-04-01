<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Courses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses',function(Blueprint $table){
            $table->id();
            $table->bigInteger('id_courses_tags');
            $table->bigInteger('id_review');
            $table->bigInteger('id_lesson');
            $table->string('courses','255');
            $table->text('description');
            $table->integer('price');
            $table->string('avatar','255');
            $table->integer("time");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
