@extends('index.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Data Produk Makanan
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
            <form method="post" action="{{ route('ProdukMakanan.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="Id_Produk">Id_Produk</label>
                    <input type="text" name="Id_Produk" class="form-control" id="Id_Produk" aria-describedby="Id_Produk" >
                </div>
                <div class="form-group">
                    <label for="Merk">Merk</label>
                    <input type="Name" name="Merk" class="form-control" id="Merk" aria-describedby="Merk" >
                </div>
                <div class="form-group">
                    <label for="Harga">Harga</label>
                    <select class="form-control" name='Harga'>
                    <input type="Name" name="Harga" class="form-control" id="Harga" aria-describedby="Harga" >
                    </select>
                </div>
                <div class="form-group">
                    <label for="Jenis">Jenis</label>
                    <input type="Jenis" name="Jenis" class="form-control" id="Jenis" aria-describedby="Jenis" >
                </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
