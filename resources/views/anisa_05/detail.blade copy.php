@extends('anisa_05.layout')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Merek: </b>{{ $mahasiswa->merek }}</li>
                        <li class="list-group-item"><b>Jenis: </b>{{ $mahasiswa->jenis }}</li>
                        <li class="list-group-item"><b>Warna: </b>{{ $mahasiswa->warna }}</li>
                        <li class="list-group-item"><b>Jumlah Pintu: </b>{{ $mahasiswa->jumlah_pintu }}
                        <li class="list-group-item"><b>Berat: </b>{{ $mahasiswa->berat }}
                        
                        
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('anisa_05.index') }}">Kembali</a>

            </div>
        </div>
    </div>
@endsection