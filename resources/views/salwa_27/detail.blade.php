@extends('salwa_27.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>ID: </b>{{ $Smartphone->id }}</li>
                        <li class="list-group-item"><b>Merk: </b>{{ $Smartphone->merk }}</li>
                        <li class="list-group-item"><b>Tipe: </b>{{ $Smartphone->tipe }}</li>
                        <li class="list-group-item"><b>Warna: </b>{{ $Smartphone->warma }}</li>
                        <li class="list-group-item"><b>Kapasitas: </b>{{ $Smartphone->kapasitas }}</li>
                        <li class="list-group-item"><b>Sistem Operasi: </b>{{ $Smartphone->sistem_operasi }}</li>
                        <li class="list-group-item"><b>Ukuran Layar: </b>{{ $Smartphone->ukuran_layar }}</li>
                        <li class="list-group-item"><b>Berat: </b>{{ $Smartphone->berat }}</li>
                        <li class="list-group-item"><b>Resolusi Kamera: </b>{{ $Smartphone->resolusi_kamera }}</li>
                        <li class="list-group-item"><b>Harga: </b>{{ $Smartphone->harga }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('salwa_27.index') }}">Kembali</a>
            </div>
        </div>
        
    </div>

@endsection