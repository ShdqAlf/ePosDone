<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriBarang extends Model
{
    use HasFactory, SoftDeletes;

    // Tentukan nama tabel yang benar
    protected $table = 'kategori_barang'; // Pastikan ini sesuai dengan nama tabel Anda

    protected $fillable = [
        'nama_kategori',
        'deskripsi',
    ];

    // Relasi ke barang
    public function barang()
    {
        return $this->hasMany(Barang::class, 'kategori_id');
    }
}
