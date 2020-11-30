<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDchatModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dchat', function (Blueprint $table) {
            $table->bigIncrements("id_chat");
            $table->bigInteger('kode_hchat');
            $table->text('pesan');
            $table->string("sender",100);
            $table->smallInteger('jenis')->default(0)->comment('0: Customer, 1:Pegawai');
            $table->bigInteger('status')->default(0)->comment('0: unread, 1: read');
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
        Schema::dropIfExists('dchat');
    }
}
