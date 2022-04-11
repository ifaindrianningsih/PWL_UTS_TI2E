@extends('bella_07.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Tv
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama : </b>{{$Tv->nama}}</li>
                    <li class="list-group-item"><b>Merk : </b>{{$Tv->merk}}</li>
                    <li class="list-group-item"><b>Tahun Keluaran : </b>{{$Tv->tahun}}</li>
                    <li class="list-group-item"><b>Buatan : </b>{{$Tv->asal}}</li>
                    <li class="list-group-item"><b>Harga : </b>Rp. {{$Tv->harga}}</li>
                    </ul>
                </div>
            <a class="btn btn-success mt-3" href="{{ route('tv.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
