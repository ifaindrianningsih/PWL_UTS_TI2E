@extends('shintya_28.aksesoris.layout')
 
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">Detail Data Aksesoris Pakaian</div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Nama: </b>{{$aksesoris->nama}}</li>
                <li class="list-group-item"><b>Gambar: </b><img src="{{$aksesoris->gambar}}" width='250' heigth='250'></li>
                <li class="list-group-item"><b>Bahan: </b>{{$aksesoris->bahan}}</li>
                <li class="list-group-item"><b>Harga: </b>{{$aksesoris->harga}}</li>
                <li class="list-group-item"><b>Stok Awal: </b>{{$aksesoris->stok_awal}}</li>
                <li class="list-group-item"><b>Stok Akhir: </b>{{$aksesoris->stok_akhir}}</li>
            </ul>
        </div>
        <a class="btn btn-success mt-3" href="{{ route('aksesoris.index') }}">Kembali</a>
        </div>
</div>
</div>
@endsection