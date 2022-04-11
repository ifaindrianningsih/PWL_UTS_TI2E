@extends('anjani_06.layout')
 
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Mebel
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Nama: </b>{{$mebel_06->nama}}</li>
                        <li class="list-group-item"><b>Bahan Dasar: </b>{{$mebel_06->bahan}}</li>
                        <li class="list-group-item"><b>Jenis: </b>{{$mebel_06->jenis}}</li>
                        <li class="list-group-item"><b>Kualitas: </b>{{$mebel_06->kualitas}}</li>
                        <li class="list-group-item"><b>Harga: </b>{{$mebel_06->harga}}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('mebel_06.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
                   
