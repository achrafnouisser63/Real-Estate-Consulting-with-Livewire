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
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
          //  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        //  $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('tele');
            $table->string('email');
            $table->string('contry');
            $table->string('sttate');
            $table->string('ville');
$table->string('tybe_1');
            $table->string('tybe_2');
            $table->string('tybe_3');
            $table->string('is_valid');
            $table->string('user_id');
            $table->string('nawe3');
            $table->longText('problem');








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
        Schema::dropIfExists('consultations');
    }
};
