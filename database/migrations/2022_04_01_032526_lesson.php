<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lesson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson',function(Blueprint $table){
            $table->id();
            $table->bigInteger('id_document');
            $table->string('lesson','255');
            $table->text('description');
            $table->text('requiment');
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
        Schema::dropIfExists('lesson');
    }
}
