@extends('della_10.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Detail Tas_10 Della</div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>id: </b>{{ $Tas_10->id }}</li>
                    <li class="list-group-item"><b>merkTas: </b>{{ $Tas_10->merkTas }}</li>
                    <li class="list-group-item"><b>Harga: </b>{{ $Tas_10->harga }}</li>
                    <li class="list-group-item"><b>Stok: </b>{{$Tas_10->stok}}</li>
                    <li class="list-group-item"><b>Kategori: </b>{{ $Tas_10->kategori }}</li>
                    <li class="list-group-item"><b>Deskripsi: </b>{{ $Tas_10->deskripsi }}</li>
                </ul>
            </div> <a class="btn btn-success mt-3" href="{{ route('tas.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection