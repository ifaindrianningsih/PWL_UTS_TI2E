@extends('mahbub_19.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Dosen
            </div>
            <div class="card body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>NIP : </b>{{ $dosen->nip }}</li>
                    <li class="list-group-item"><b>Nama : </b>{{ $dosen->nama }}</li>
                    <li class="list-group-item"><b>E-Mail : </b>{{ $dosen->email }}</li>
                    <li class="list-group-item"><b>Jabatan : </b>{{ $dosen->jabatan }}</li>
                    <li class="list-group-item"><b>Alamat : </b>{{ $dosen->alamat }}</li>
                    <li class="list-group-item"><b>TTL : </b>{{ $dosen->ttl }}</li>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('dosen.index') }}">kembali</a>
        </div>
    </div>
</div>
    
@endsection