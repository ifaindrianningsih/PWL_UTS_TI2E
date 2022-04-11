@extends('firgi_12.layout.main')
@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
    <div class="card-header"> Tambah Mahasiswa</div>
    <div class="card-body">
        @if ($errors->any())
    <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li> @endforeach
    </ul>
    </div>
    @endif
    <form method="POST" action="/firgi_12/laptop" id="myForm">
    @csrf
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" >
    </div>
    <div class="form-group">
    <label for="merk">Merk</label>
    <input type="text" name="merk" class="form-control" id="merk" aria-describedby="merk" >
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" name="harga" class="form-control" id="harga" aria-describedby="harga" >
    </div>
    <div class="form-group">
    <label for="Category">Category</label>
    <select class="form-control" name="category_id">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
    <label for="Deskripsi">Deskripsi</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
    </div>
    <div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file" name="gambar" class="form-control" id="gambar" aria-describedby="gambar" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
    </div>
@endsection
