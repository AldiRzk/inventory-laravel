<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Jenis;
use App\Models\Supplier;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password'=> bcrypt('admin123'),
            'role'=> 'admin',
        ]);
        Barang::create([
            'gambar'=> 'gambar.jpg',
            'nama_barang'=> 'Minyak Bimoli 5L',
            'id_jenis'=> '1',
            'harga_beli'=> '150000',
            'harga_jual'=> '200000',
            'stok'=> '10',
        ]);
        BarangMasuk::create([
            'id_barang'=> '1',
            'id_supplier'=> '1',
            'jumlah'=> '100',
        ]);
        BarangKeluar::create([
            'id_barang'=> '1',
            'nama_customer'=> 'Al',
            'jumlah'=> '100',
        ]);
        Jenis::create([
            'nama_jenis'=> 'Minyak',
        ]);
        Supplier::create([
            'nama_supplier'=> 'Al',
            'alamat'=> 'Margahayu',
            'no_telp'=> '089',
        ]);


    }
}
