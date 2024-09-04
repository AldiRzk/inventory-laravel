@extends('layouts.master')
@section('tittle', 'dashboard')
@section('content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $barang }}</h3>
                                <p>Total Barang</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-box"></i>
                            </div>
                            <a href="/barang" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $barangmasuk }}</h3>
                                <p>Total Barang Masuk</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-arrow-down"></i>
                            </div>
                            <a href="/barangmasuk" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $barangkeluar }}</h3>
                                <p>Total Barang Keluar</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-arrow-up"></i>
                            </div>
                            <a href="/barangkeluar" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $supplier }}</h3>
                                <p>Total Supplier</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-truck"></i>
                            </div>
                            <a href="/supplier" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
        </section>


        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>History Terakhir BarangMasuk</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Nama Supplier</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tabelmasuk as $tabelmasuk)
                                            <tr>
                                                <td>{{ $tabelmasuk->barang->nama_barang }}</td>
                                                <td>{{ $tabelmasuk->supplier->nama_supplier }}</td>
                                                <td>{{ $tabelmasuk->jumlah }}</td>
                                                <td>{{ \Carbon\Carbon::parse($tabelmasuk->date)->format('d-m-Y H:i') }}
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
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>History Terakhir BarangMasuk</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Nama Customer</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tabelkeluar as $tabelkeluar)
                                            <tr>
                                                <td>{{ $tabelkeluar->barang->nama_barang }}</td>
                                                <td>{{ $tabelkeluar->nama_customer }}</td>
                                                <td>{{ $tabelkeluar->jumlah }}</td>
                                                <td>{{ \Carbon\Carbon::parse($tabelkeluar->date)->format('d-m-Y H:i') }}
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
        </section>

    </div>
@endsection
