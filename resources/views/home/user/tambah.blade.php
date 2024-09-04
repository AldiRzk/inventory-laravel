@extends('layouts.master')
@section('tittle','user')
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
                                <form action="/user/simpan" method="post">
                                    @csrf
                                    <div class="form-group">
                                      <label for="">Nama</label>
                                      <input type="text"
                                        class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                                    <div class="form-group">
                                      <label for="">E-Mail</label>
                                      <input type="text"
                                        class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Password</label>
                                      <input type="text"
                                        class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="form-group">
                                      <label for="">Role</label>
                                      <select name="role" id="" class="form-control">
                                        <option value="admin">admin</option>
                                        <option value="karyawan">karyawan</option>
                                      </select>
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


