@extends('layouts.master')
@section('tittle','barangkeluar')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h2>Halaman Tambah</h2>
                            </div>
                            <div class="card-body">
                                <form action="/barangkeluar/simpan" method="post">
                                    @csrf
                                    <div class="form-group">
                                    <label for="" class="form-label">ID Barang</label>
                                      <select name="id_barang" id="" class="form-control">
                                        <option value="" disabled>Pilih Barang</option>
                                        @foreach ($barang as $barang)
                                            <option value="{{$barang->id}}">{{$barang->nama_barang}} <b>Stok:</b> {{$barang->stok}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Nama Customer</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="nama_customer"
                                            id=""
                                            aria-describedby="helpId"
                                            placeholder=""
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Jumlah</label>
                                        <input
                                            type="number"
                                            class="form-control"
                                            name="jumlah"
                                            id=""
                                            aria-describedby="helpId"
                                            placeholder=""
                                        />
                                    </div>

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


