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
                                <h2>Halaman Tambah</h2>
                            </div>
                            <div class="card-body">
                                <form action="/supplier/simpan" method="post">
                                    @csrf
                                    <div class="form-group">
                                      <label for="">Nama Supplier</label>
                                      <input type="text"
                                        class="form-control" name="nama_supplier" id="nama_supplier" aria-describedby="helpId" placeholder="">
                                    <div class="form-group">
                                      <label for="">Alamat</label>
                                      <input type="text"
                                        class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="form-group">
                                      <label for="">No Telepon</label>
                                      <input type="text"
                                        class="form-control" name="no_telp" id="no_telp" aria-describedby="helpId" placeholder="">
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


    