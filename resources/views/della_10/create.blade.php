@extends('della_10.layout')
@section('content')
<div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
        <div class="card-header"> Tambah Tas Della </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger"> <strong>Whoops!</strong> There were some problems with your
                    input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif <form method="post" action="{{ route('tas.store') }}" id="myForm"> @csrf <div
                        class="form-group"> <label for="id">id</label> <input type="id" name="id"
                            class="form-control" id="id" aria-describedby="id"> </div>
                    <div class="form-group"> <label for="merkTas">merkTas</label> <input type="merkTas"
                            name="merkTas" class="form-control" id="merkTas" aria-describedby="merkTas"> </div>
                    <div class="form-group"> <label for="harga">Harga</label> <input type="harga" name="harga"
                            class="form-control" id="harga" aria-describedby="harga"> </div>
                            <div class="form-group"> <label for="stok">Stok</label> <input type="stok"
                                name="stok" class="form-control" id="stok" aria-describedby="stok"> </div>
                    <div class="form-group"> <label for="kategori">kategori</label> <input type="text"
                            name="kategori" class="form-control" id="kategori" aria-describedby="kategori"> </div>
                    <div class="form-group"> <label for="deskripsi">Deskripsi</label> <input type="deskripsi"
                            name="deskripsi" class="form-control" id="deskripsi" aria-describedby="deskripsi"> </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
    @endsection
