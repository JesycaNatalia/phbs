<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kuisioner_id');
            $table->bigInteger('bulan_id');
            $table->bigInteger('user_id');
            $table->timestamps();

            $table->foreign('kuisioner_id')->references('id')->on('kuisioners')->onDelete('cascade');
            $table->foreign('bulan_id')->references('id')->on('bulans')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban_users');
    }
}
