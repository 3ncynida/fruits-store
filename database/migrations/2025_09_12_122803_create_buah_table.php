<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_buah', 50)->unique();
            $table->integer('stok')->default(0); // jumlah stok buah
            $table->decimal('harga', 10, 2);     // harga per satuan
            $table->string('satuan', 20)->default('kg'); // contoh: kg, pcs, ikat
            $table->text('deskripsi')->nullable(); // deskripsi opsional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buah');
    }
};
