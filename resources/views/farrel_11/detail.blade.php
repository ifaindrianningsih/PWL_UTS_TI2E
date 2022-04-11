@extends('produkmakanan.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Data Produk Makanan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Id_Produk: </b>{{$ProdukMakanan->Id_Pegawai}}</li>
                <li class="list-group-item"><b>Merk: </b>{{$ProdukMakanan->Merk}}</li>
                <li class="list-group-item"><b>Harga: </b>{{$ProdukMakanan->Kelas->Harga}}</li>
                <li class="list-group-item"><b>Jenis: </b>{{$ProdukMakanan->Jenis}}</li>

                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('produkmakanan.index') }}">Back</a>
        </div>
    </div>
</div>
@endsection
