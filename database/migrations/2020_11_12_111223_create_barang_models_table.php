<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->bigInteger('harga');
            $table->smallInteger('stok');
            $table->string('gambar',255);
            $table->smallInteger('status');
            $table->bigInteger('kode_kategori')->constrained('kategori')->onDelete('cascade');;
            $table->bigInteger('kode_brand')->nullable()->constrained('brand')->onDelete('cascade');
            $table->dateTime('deleted_at')->nullable();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('barang');
        Schema::dropIfExists('barang',function(Blueprint $table){
            $table->dropForeign('barang_kode_kategori_foreign');
            $table->dropIndex('barang_kode_kategori_index');
            $table->dropForeign('barang_kode_brand_foreign');
            $table->dropIndex('barang_kode_brand_index');
            $table->dropColumn('kode_kategori');
            $table->dropColumn('kode_brand');
        });
    }
}
