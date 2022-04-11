@extends('firgi_12.layout.main')
@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
    <div class="card-header"> Edit Mahasiswa</div>
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
    <form method="POST" action="/firgi_12/laptop/{{ $laptop->slug }}" id="myForm">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ $laptop->name }}" aria- describedby="Nim" >
        </div>
        <div class="form-group">
        <label for="merk">Merk</label>
        <input type="text" name="merk" class="form-control" id="merk" value="{{ $laptop->merk }}" aria- describedby="Nama" >
        </div>
        <div class="form-group">
            <label for="harga">harga</label>
            <input type="text" name="harga" class="form-control" id="harga" value="{{ $laptop->harga }}" aria- describedby="Email" >
        </div>
        <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" name="category">
            @foreach ($category as $cat)
            <option value="{{ $cat->id }}" {{ $laptop->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
        <label for="Jurusan">Jurusan</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi" value="{{ $laptop->deskripsi }}"></textarea>
        </div>
        <div class="form-group">
        <label for="Gambar">Gambar</label>
        <input type="file" name="gambar" class="form-control" id="gambar" aria-describedby="gambar" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>
        </div>
        </div>
@endsection
