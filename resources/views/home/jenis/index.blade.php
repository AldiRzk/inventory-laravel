@extends('layouts.master')
@section('tittle','jenis')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <br>
                    <div class="card">
                        <div class="card-header">
                            <h2>Halaman Data Jenis</h2>
                        </div>
                        <div class="card-body">
                        <a class="btn btn-primary" href="/jenis/tambah"><i class="fa-solid fa-plus nav-icon"></i> Tambah</a>
                        <br>
                        <br>
                        <div
                        class="table-responsive">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Jenis</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jenis as $jenis)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$jenis->nama_jenis}}</td>
                                        <td><a href="/jenis/{{$jenis -> id}}/edit" class="btn btn-warning"><i class="fa-solid fa-pencil nav-icon"></i> Edit</a></td>
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
