<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view("home.supplier.index", compact("supplier"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("home.supplier.tambah");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Supplier::create($request->all());
        return redirect('/supplier')->with("success","Supplier Berhasil Ditambah");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $supplier = Supplier::find($id);
        return view('home.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Supplier::find($id)->update($request->all());
        return redirect('/supplier')->with("success","Supplier Berhasil Diedit");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Supplier::find($id)->delete();
        return redirect('/supplier');
    }
}
