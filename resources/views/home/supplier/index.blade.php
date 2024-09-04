@extends('layouts.master')
@section('tittle','supplier')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <br>
                    <div class="card">
                        <div class="card-header">
                            <h2>Halaman Data Supplier</h2>
                        </div>
                        <div class="card-body">
                        <a class="btn btn-primary" href="/supplier/tambah"><i class="fa-solid fa-plus nav-icon"></i> Tambah</a>
                        <br>
                        <br>
                        <div
                        class="table-responsive">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama supplier</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($supplier as $supplier)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$supplier->nama_supplier}}</td>
                                        <td>{{$supplier->alamat}}</td>
                                        <td>{{$supplier->no_telp}}</td>
                                        <td><a href="/supplier/{{$supplier -> id}}/edit" class="btn btn-warning"><i class="fa-solid fa-pencil nav-icon"></i> Edit</a>
                                            <a href="/supplier/{{$supplier -> id}}/hapus" class="btn btn-danger" hidden>Hapus</a></td>
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
