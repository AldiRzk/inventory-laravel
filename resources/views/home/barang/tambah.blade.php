@extends('layouts.master')
@section('tittle', 'barang')
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
                                <form action="/barang/simpan" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="gambar">Gambar</label>
                                            <input type="file" class="form-control" name="gambar" id="gambar"
                                                aria-describedby="helpId" placeholder="" onchange="previewImage(event)">
                                            @error('gambar')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                            <img id="image-preview" src="" alt="Image Preview"
                                                style="max-width: 300px; margin-top: 10px; display: none;">

                                            <script>
                                                function previewImage(event) {
                                                    var reader = new FileReader();
                                                    reader.onload = function() {
                                                        var output = document.getElementById('image-preview');
                                                        output.src = reader.result;
                                                        output.style.display = 'block'; // Menampilkan gambar setelah dipilih
                                                    };
                                                    reader.readAsDataURL(event.target.files[0]);
                                                }
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Barang</label>
                                            <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="{{old('nama_barang')}}"
                                                aria-describedby="helpId" placeholder="">
                                            @error('nama_barang')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">ID Jenis</label>
                                            <select name="id_jenis" id="id_jenis" class="form-control">
                                                <option value="" disabled>Pilih ID</option>
                                                @foreach ($jenis as $jenis)
                                                    <option value="{{ $jenis->id }}">{{ $jenis->id }} -
                                                        {{ $jenis->nama_jenis }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('id_jenis')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga Beli</label>
                                            <input type="number" class="form-control" name="harga_beli" id="harga_beli"
                                                aria-describedby="helpId" placeholder="" value="{{ old('harga_beli') }}">
                                            @error('harga_beli')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Harga Jual</label>
                                            <input type="number" class="form-control" name="harga_jual" id="harga_jual"
                                                aria-describedby="helpId" placeholder="" value="{{ old('harga_jual') }}">
                                            @error('harga_jual')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Stok</label>
                                            <input type="number" class="form-control" name="stok" id="stok"
                                                aria-describedby="helpId" placeholder="" value="{{ old('stok') }}">
                                            @error('stok')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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
