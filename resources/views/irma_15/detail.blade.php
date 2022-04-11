@extends('irma_15.layout')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Rumah
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Pemilik: </b>{{ $rumah->pemilik }}</li>
                        <li class="list-group-item"><b>Alamat: </b>{{ $rumah->alamat }}</li>
                        <li class="list-group-item"><b>Harga: </b>{{ $rumah->harga }}</li>
                        <li class="list-group-item"><b>Warna: </b>{{ $rumah->warna }}</li>
                        <li class="list-group-item"><b>Tipe: </b>{{ $rumah->tipe }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>

            </div>
        </div>
    </div>
@endsection