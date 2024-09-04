@extends('layouts.master')
@section('tittle', 'barangkeluar')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="container mt-5">
                                        <h2>Detail Data Barang Masuk</h2>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{ asset('/storage/products/'.$barangkeluar->barang->gambar) }}" alt="Item Image" class="img-fluid rounded" style="width:100%">
                                            </div>
                                            <div class="col-md-8">
                                                <h4>{{ $barangkeluar->barang->nama_barang }}</h4>
                                                <p>Customer : {{$barangkeluar->nama_customer}}</p>
                                                <p>Rp {{ number_format($barangkeluar->barang->harga_jual, 2, ',', '.') }}</p>
                                                <p class="text-danger">
                                                    {{ \Carbon\Carbon::parse($barangkeluar->date)->format('d-m-Y H:i') }}
                                                </p>
                                                <p>Jumlah : {{ $barangkeluar->jumlah }}</p>
                                            </div>
                                        </div>
                                        <a href="/barangkeluar" class="btn btn-back mt-3">
                                            <i class="fas fa-arrow-left"></i> Kembali
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
