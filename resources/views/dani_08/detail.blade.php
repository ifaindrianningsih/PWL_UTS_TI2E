@extends('dani_08.layout')
 
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Sekolah
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Nama: </b>{{$Sekolah->nama}}</li>
                        <li class="list-group-item"><b>Alamt: </b>{{$Sekolah->alamt}}</li>
                        <li class="list-group-item"><b>Email: </b>{{$Sekolah->email}}</li>
                        <li class="list-group-item"><b>No Telp: </b>{{$Sekolah->notelp}}</li>
                        <li class="list-group-item"><b>Jumlah Siswa: </b>{{$Sekolah->jumlahsiswa}}</li>
                        <li class="list-group-item"><b>Akreditasi: </b>{{$Sekolah->akreditasi}}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('sekolah.index') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection