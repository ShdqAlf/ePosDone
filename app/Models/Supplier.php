<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = ['nama_supplier', 'alamat', 'contact_person', 'nomor_telpon', 'email_supplier'];

    // Relasi ke barang
    public function barangs()
    {
        return $this->hasMany(Barang::class, 'supplier_id');
    }
}
