<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriBarangTable extends Migration
{
    /**
     * Menjalankan migration untuk membuat tabel kategori_barang.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('kategori_barang', function (Blueprint $table) {
            $table->id(); // ID primary key
            $table->string('nama_kategori', 100); // Nama kategori, varchar(100)
            $table->text('deskripsi'); // Deskripsi kategori, tipe text
            $table->timestamps(); // Created at dan updated at
            $table->softDeletes(); // Deleted at untuk soft delete
        });
    }

    /**
     * Membatalkan migration.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_barang');
    }
}
