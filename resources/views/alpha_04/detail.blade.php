@extends('mkaryawan.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Mahasiswa
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Id_Karyawan: </b>{{$Karyawan04->id_karyawan}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Karyawan->nama}}</li>
                    <li class="list-group-item"><b>Jabatan: </b>{{$Karyawan->jabatan04->nama_jabatan}}</li>
                    <li class="list-group-item"><b>Jenis Kelamin: </b>{{$Karyawan->jeniskelamin04->nama_jabatan}}</li>
                    <li class="list-group-item"><b>Email: </b>{{$Karyawan->email}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$Karyawan->alamat}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
