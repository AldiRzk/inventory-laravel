<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_barang",
        "id_supplier",
        "jumlah",
    ];
    public function barang()
    {
        return $this->belongsTo(Barang::class,"id_barang", "id");
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class,"id_supplier","id");
    }
}