<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $barang = Barang::count();
        $supplier = Supplier::sum('id');
        $barangmasuk = BarangMasuk::sum('jumlah');
        $barangkeluar = BarangKeluar::sum('jumlah');
        $tabelkeluar = BarangKeluar::all();
        $tabelmasuk = BarangMasuk::all();
        return view("home.dashboard",compact("barang", "supplier","barangmasuk","barangkeluar", "tabelkeluar", "tabelmasuk"));
    }
}
