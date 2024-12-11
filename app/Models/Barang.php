<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use HasFactory, SoftDeletes;

    // Tentukan nama tabel yang benar
    protected $table = 'barang'; // Pastikan ini sesuai dengan nama tabel Anda

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'deskripsi',
        'harga',
        'kategori_id',
        'supplier_id',
        'stok_terkini',
    ];

    // Relasi ke kategori_barang
    public function kategori()
    {
        return $this->belongsTo(KategoriBarang::class, 'kategori_id');
    }

    // Relasi ke supplier
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
}
