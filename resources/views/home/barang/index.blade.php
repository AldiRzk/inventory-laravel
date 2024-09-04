@extends('layouts.master')
@section('tittle','barang')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <br>
                    <div class="card">
                        <div class="card-header">
                            <h2>Halaman Data Barang</h2>
                        </div>
                        <div class="card-body">
                        <a class="btn btn-primary" href="/barang/tambah"><i class="fa-solid fa-plus nav-icon"></i> Tambah</a>
                        <br>
                        <br>
                        <div
                        class="table-responsive">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">ID Jenis</th>
                                    <th scope="col">Harga Beli</th>
                                    <th scope="col">Harga Jual</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $barang)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/products/'.$barang->gambar) }}" class="rounded" style="width:150px">
                                        </td>
                                        <td>{{$barang->nama_barang}}</td>
                                        <td>{{$barang->jenis->nama_jenis}}</td>
                                        <td>Rp. {{ number_format($barang->harga_beli)}}</td>
                                        <td>Rp. {{ number_format($barang->harga_jual)}}</td>
                                        <td>{{$barang->stok}}</td>
                                        <td><a href="/barang/{{$barang -> id}}/edit" class="btn btn-warning"><i class="fa-solid fa-pencil nav-icon"></i> Edit</a>
                                            <a href="/barang/{{$barang -> id}}/hapus" class="btn btn-danger" onclick="return confirm('Yakin Akan Dihapus')"><i class="fa-solid fa-trash nav-icon"></i> Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
