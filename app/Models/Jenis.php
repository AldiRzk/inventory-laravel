<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jenis extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_jenis'
    ] ;
    public function barang()
    {
        return $this->hasMany(Barang::class, 'id_barang', 'id');
    }
}
