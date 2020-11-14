<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorderModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horder', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_trans');
            $table->date('tanggal_pengiriman');
            $table->mediumInteger('grandtotal');
            $table->smallInteger('estimasi_waktu');
            $table->string('metode_pembayaran',13);
            $table->smallInteger('status_order');
            $table->smallInteger('status');
            $table->bigInteger('kode_pegawai');
            $table->bigInteger('kode_promo');
            $table->bigInteger('kode_customer');
            $table->dateTime('deleted_at')->nullable();
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
        Schema::dropIfExists('horder');
    }
}
