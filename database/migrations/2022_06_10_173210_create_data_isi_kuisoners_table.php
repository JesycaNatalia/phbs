<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataIsiKuisonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_isi_kuisoners', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_kk');
            $table->string('bulan');
            $table->string('skor');
            $table->string('hasil');
            $table->softDeletes();
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
        Schema::dropIfExists('data_isi_kuisoners');
    }
}
