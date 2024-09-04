@extends('layouts.master')
@section('tittle','dashboard')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h2>Halaman Edit</h2>
                            </div>
                            <div class="card-body">
                                <form action="/jenis/{{$jenis -> id}}/simpan" method="post">
                                @csrf
                                <div class="form-group">
                                <label for="">Nama Jenis</label>
                                <input type="text"
                                    class="form-control" name="nama_jenis" id="nama_jenis" aria-describedby="helpId" placeholder="" value="{{$jenis->nama_jenis}}">
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