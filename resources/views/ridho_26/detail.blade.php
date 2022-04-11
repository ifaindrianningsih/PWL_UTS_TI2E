@extends('ridho_26.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Minuman
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Id: </b>{{$Minuman->Id}}</li>
                    <li class="list-group-item"><b>Merk: </b>{{$Minuman->Merk}}</li>
                    <li class="list-group-item"><b>Rasa: </b>{{ $Minuman->Rasa}}</li>
                    <li class="list-group-item"><b>Expired: </b>{{ $Minuman->Expired}}</li>
                    <li class="list-group-item"><b>Harga: </b>{{$Minuman->Harga}}</li>
                    <li class="list-group-item"><b>Berat: </b>{{$Minuman->Berat}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('minuman.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection