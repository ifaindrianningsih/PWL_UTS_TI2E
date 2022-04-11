@extends('akmalia_03.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Anggota
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Id: </b>{{$anggota->id}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$anggota->nama}}</li>
                    <li class="list-group-item"><b>Jenis Kelamin: </b>{{$anggota->jk}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b>{{$anggota->tglLahir}}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{$anggota->jurusan}}</li>
                    <li class="list-group-item"><b>No_Handphone: </b>{{$anggota->no_handphone}}</li>
                    </ul>
                    </div>
            <a class="btn btn-success mt-3" href="{{ route('anggota.index') }}">Kembali</a>
            </div>
        </div>
   </div>
@endsection