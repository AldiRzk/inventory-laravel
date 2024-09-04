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
                            <h2>Halaman Data User</h2>
                        </div>
                        <div class="card-body">
                        <a class="btn btn-primary" href="/user/tambah"><i class="fa-solid fa-plus nav-icon"></i> Tambah</a>
                        <br>
                        <br>
                        <div
                        class="table-responsive">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">E-Mail</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->password}}</td>
                                        <td>{{$user->role}}</td>
                                        <td><a href="/user/{{$user -> id}}/edit" class="btn btn-warning"><i class="fa-solid fa-pencil nav-icon"></i> Edit</a>
                                            <a href="/user/{{$user -> id}}/hapus" class="btn btn-danger"><i class="fa-solid fa-trash nav-icon"></i> Hapus</a></td>
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
