<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangmasuk = BarangMasuk::all();
        return view("home.barangmasuk.index", compact("barangmasuk"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        $supplier = Supplier::all();
        return view("home.barangmasuk.tambah", compact("barang","supplier"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'id_supplier' => 'required',
            'jumlah' => 'required|numeric',
        ]);
        $id = $request->id_barang;
        $barang = Barang::find($id);
        $barang -> increment('stok', $request->jumlah);

        BarangMasuk::create($request->all());
        return redirect("/barangmasuk")->with("success","BarangMasuk Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barangmasuk = BarangMasuk::find($id);
        return view("home.barangmasuk.show", compact("barangmasuk"));
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
