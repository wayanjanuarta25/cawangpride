<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('sub_jenis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_materiil_id')->constrained('jenis_materiil')->onDelete('cascade');
            $table->string('nama');
            $table->timestamps();
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_jenis');
    }
};
