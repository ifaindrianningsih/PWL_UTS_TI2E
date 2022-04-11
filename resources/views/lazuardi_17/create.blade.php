@extends('lazuardi_17.layouts')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambahkan Barang Elektronik
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('BarangElektronik.store') }}" id="myForm"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Nim">Nama</label>
                        <input type="text" name="nama_barang" class="form-control" id="Nim" value=""
                            aria-describedby="Nim">
                    </div>
                    <div class="form-group">
                        <label for="Nim">Foto</label>
                        <input type="file" name="foto" class="form-control" id="Nim" value="" aria-describedby="Nim">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Merk</label>
                        <input type="text" name="merk" class="form-control" id="Nama" value="" aria-describedby="Nama">
                    </div>

                    <div class="form-group">
                        <label for="Jurusan">Warna</label>
                        <input type="Jurusan" name="warna" class="form-control" id="Jurusan" value=""
                            aria-describedby="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Ukuran</label>
                        <input type="Jurusan" name="ukuran" class="form-control" id="Jurusan" value=""
                            aria-describedby="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Harga</label>
                        <input type="Jurusan" name="harga" class="form-control" id="Jurusan" value=""
                            aria-describedby="Jurusan">
                    </div>
                    <div class="form-group mb-3">
                        <label for="Jurusan">Stok</label>
                        <input type="text" name="stok" class="form-control" id="Jurusan" value=""
                            aria-describedby="Jurusan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endsection