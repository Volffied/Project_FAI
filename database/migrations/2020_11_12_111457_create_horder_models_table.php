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
            $table->bigIncrements('id_horder');
            $table->date('tanggal_trans');
            $table->date('tanggal_pengiriman')->nullable();
            $table->bigInteger('subtotal')->comment('Harga Bersih');
            $table->bigInteger('grandtotal');
            $table->smallInteger('estimasi_waktu')->comment('Dalam Detik');
            $table->string('metode_pembayaran',13);
            $table->smallInteger('status_order')->default(0);
            $table->smallInteger('status')->nullable();
            $table->bigInteger('kode_pegawai')->nullable();
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
