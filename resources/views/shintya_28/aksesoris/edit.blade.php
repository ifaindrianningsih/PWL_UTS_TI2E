@extends('shintya_28.aksesoris.layout')
 
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
            Edit Data Aksesoris Pakaian
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
            <form method="post" action="{{ route('aksesoris.update', $aksesoris->id) }}" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama</label> 
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $aksesoris->nama }}" aria-describedby="nama" > </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label> 
                        <input type="text" name="gambar" class="form-control" id="gambar" value="{{ $aksesoris->gambar }}" aria-describedby="gambar" > 
                    </div>
                    <div class="form-group">
                        <label for="bahan">Bahan</label> 
                        <input type="bahan" name="bahan" class="form-control" id="bahan" value="{{ $aksesoris->bahan }}" aria-describedby="bahan" > 
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label> 
                        <input type="harga" name="harga" class="form-control" id="harga" value="{{ $aksesoris->harga }}" aria-describedby="harga" > 
                    </div>
                    <div class="form-group">
                        <label for="stok_awal">Stok Awal</label> 
                        <input type="stok_awal" name="stok_awal" class="form-control" id="stok_awal" value="{{ $aksesoris->stok_awal }}" aria-describedby="stok_awal" > 
                    </div>
                    <div class="form-group">
                        <label for="stok_akhir">Stok Akhir</label> 
                        <input type="stok_akhir" name="stok_akhir" class="form-control" id="stok_akhir" value="{{ $aksesoris->stok_akhir }}" aria-describedby="stok_akhir" > 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
