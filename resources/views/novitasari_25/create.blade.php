@extends('mobil.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Mahasiswa
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
    <form method="post" action="{{ route('mobil.store') }}" id="myForm">
    @csrf
        <div class="form-group">
        <label for="id_mobil">Nim</label>
        <input type="text" name="id_mobil" class="form-control" id="id_mobil" aria-describedby="id_mobil" >
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="nama" name="nama" class="form-control" id="nama" ariadescribedby="nama" >
    </div>
    <div class="form-group">
        <label for="harga">Kelas</label>
        <input type="harga" name="harga" class="form-control" id="harga" ariadescribedby="harga" >
    </div>
        <div class="form-group">
        <label for="spesifikasi">Jurusan</label>
        <input type="spesifikasi" name="spesifikasi" class="form-control" id="spesifikasi" ariadescribedby="spesifikasi" >
    </div>
    </div>
        <div class="form-group">
        <label for="kelebihan">Jurusan</label>
        <input type="kelebihan" name="kelebihan" class="form-control" id="kelebihan" ariadescribedby="kelebihan" >
    </div>
    </div>
        <div class="form-group">
        <label for="kekurangan">Jurusan</label>
        <input type="kekurangan" name="kekurangan" class="form-control" id="kekurangan" ariadescribedby="kekurangan" >
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
    </div>
@endsection
