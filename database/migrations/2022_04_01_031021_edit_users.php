<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number','20');
            $table->string('address','255');
            $table->date('birthday');
            $table->text('about');
            $table->string('avatar','255');
            $table->boolean('status');
            $table->string('username','255');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone_number','20');
            $table->dropColumn('address','255');
            $table->dropColumn('birthday');
            $table->dropColumn('about');
            $table->dropColumn('avatar','255');
            $table->dropColumn('status');
            $table->dropColumn('username','255');
            $table->dropsoftDeletes();
        });

    }
}
