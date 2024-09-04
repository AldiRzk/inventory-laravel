<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangkeluar = BarangKeluar::all();
        return view("home.barangkeluar.index", compact("barangkeluar"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        $supplier = Supplier::all();
        return view("home.barangkeluar.tambah", compact("barang", "supplier"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = Barang::find($request->id_barang);

        // Periksa apakah stok mencukupi
        if ($barang->stok < $request->jumlah) {
            return redirect('/barangkeluar/tambah')->with("error", "Stok tidak cukup");
        }

        // Kurangi stok barang
        $barang->stok -= $request->jumlah;
        $barang->save();
        BarangKeluar::create($request->all());
        return redirect('/barangkeluar')->with("success", "BarangKeluar Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barangkeluar = BarangKeluar::find($id);
        return view("home.barangkeluar.show", compact('barangkeluar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
