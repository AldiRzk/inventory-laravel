@extends('layouts.master')
@section('tittle', 'barangmasuk')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h2>Halaman Data Barang Masuk</h2>
                            </div>
                            <div class="card-body">
                                <a class="btn btn-primary" href="/barangmasuk/tambah"><i
                                        class="fa-solid fa-plus nav-icon"></i> Tambah</a>
                                <br>
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">ID Barang</th>
                                                <th scope="col">ID Supplier</th>
                                                <th scope="col">Jumlah</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($barangmasuk as $barangmasuk)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $barangmasuk->barang->nama_barang }}</td>
                                                    <td>{{ $barangmasuk->supplier->nama_supplier }}</td>
                                                    <td>{{ $barangmasuk->jumlah }}</td>
                                                    <td><a href="/barangmasuk/{{ $barangmasuk->id }}/edit"
                                                            class="btn btn-warning" hidden>Edit</a>
                                                        <a href="/barangmasuk/{{ $barangmasuk->id }}/hapus"
                                                            class="btn btn-danger" hidden>Hapus</a>
                                                        <a href="/barangmasuk/{{ $barangmasuk->id }}/show"
                                                            class="btn btn-secondary"><i
                                                                class="nav-icon fa-solid fa-eye"></i> Detail</a>
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
