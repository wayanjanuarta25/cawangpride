<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_materiil_id')->constrained('jenis_materiil')->onDelete('cascade');
            $table->foreignId('sub_jenis_id')->constrained('sub_jenis')->onDelete('cascade');
            $table->foreignId('sub_sub_jenis_id')->constrained('sub_sub_jenis')->onDelete('cascade');
            $table->string('merk');
            $table->string('tipe');
            $table->string('no_seri')->unique();
            $table->string('produk');
            $table->integer('tahun_produksi');
            $table->integer('tahun_pengadaan');
            $table->integer('tahun_pakai')->nullable();
            $table->integer('masa_pakai')->nullable();
            $table->string('kondisi');
            $table->foreignId('posisi_id')->constrained('gudangs')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('status')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang');
    }
};
