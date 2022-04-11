@extends('afvanie_01.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Sepeda
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>ID : </b>{{$Sepeda->id}}</li>
                    <li class="list-group-item"><b>Jenis Sepeda : </b>{{$Sepeda->jenis_sepeda}}</li>
                    <li class="list-group-item"><b>Merk: </b>{{$Sepeda->merk}}</li>
                    <li class="list-group-item"><b>Ukuran : </b>{{$Sepeda->ukuran}}</li>
                    <li class="list-group-item"><b>Warna : </b>{{$Sepeda->warna}}</li>
                    <li class="list-group-item"><b>Harga : </b>{{$Sepeda->harga}}</li>
                    </ul>
                </div>
            <a class="btn btn-success mt-3" href="{{ route('sepeda.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection