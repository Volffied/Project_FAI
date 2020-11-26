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
            $table->integer('poin');
            $table->string('email',100);
            $table->string('password',255);
            $table->string('notlp',25);
            $table->string('alamat',100);
            $table->smallInteger('status');
            $table->bigInteger('kode_member')->comment('0(Amateur),1(Warrior),2(Warlock),3(Demigod)');
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
