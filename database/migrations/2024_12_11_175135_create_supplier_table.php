<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel 'supplier'.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id(); // id sebagai primary key
            $table->string('nama_supplier', 200); // nama supplier
            $table->text('alamat'); // alamat supplier
            $table->string('contact_person', 100); // nama contact person
            $table->string('nomor_telpon', 50); // nomor telepon supplier
            $table->string('email_supplier', 150); // email supplier
            $table->timestamps(); // created_at dan updated_at
            $table->softDeletes(); // deleted_at (soft delete)
        });
    }

    /**
     * Membalikkan migrasi untuk menghapus tabel 'supplier'.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
