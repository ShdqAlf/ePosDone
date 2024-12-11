<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel barang.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id(); // ID sebagai primary key
            $table->string('kode_barang', 50); // Kode barang, varchar(50)
            $table->string('nama_barang', 200); // Nama barang, varchar(200)
            $table->text('deskripsi'); // Deskripsi barang, tipe text
            $table->decimal('harga', 10, 2); // Harga barang, decimal(10,2)
            $table->foreignId('kategori_id') // Foreign key ke kategori_barang
                ->constrained('kategori_barang')
                ->onDelete('cascade'); // Menghapus barang jika kategori dihapus
            $table->foreignId('supplier_id') // Foreign key ke suppliers
                ->constrained('suppliers')
                ->onDelete('cascade'); // Menghapus barang jika supplier dihapus
            $table->integer('stok_terkini'); // Stok terkini, integer
            $table->timestamps(); // Created at dan updated at
            $table->softDeletes(); // Soft delete (deleted_at)
        });
    }

    /**
     * Membatalkan migrasi untuk menghapus tabel barang.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
}
