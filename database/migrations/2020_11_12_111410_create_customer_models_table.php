<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->integer('poin')->default(0);
            $table->string('email',100);
            $table->string('password',255);
            $table->string('notlp',25);
            $table->string('alamat',100);
            $table->text('gambar')->nullable();
            $table->smallInteger('status')->default(0)->comment('0: Belum, 1:Verified');
            $table->bigInteger('kode_member')->default(1)->comment('1(Newborn),2(Knight),3(Sorcerer),4(King),5(Demigod)');
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
        Schema::dropIfExists('customer');
    }
}
