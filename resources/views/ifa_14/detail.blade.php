@extends('ifa_14.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Baju
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Nama Baju: </b>{{$baju->nama_baju}}</li>
                        <li class="list-group-item"><b>Bahan: </b>{{$baju->bahan}}</li>
                        <li class="list-group-item"><b>Stok: </b>{{$baju->stok}}</li>
                        <li class="list-group-item"><b>Warna: </b>{{$baju->warna}}</li>
                        <li class="list-group-item"><b>Motif: </b>{{$baju->motif}}</li>
                        <li class="list-group-item"><b>Ukuran: </b>{{$baju->ukuran}}</li>
                        <li class="list-group-item"><b>Harga: </b>{{$baju->harga}}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('baju.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection