@extends('mubarok_21.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Penjualan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama Barang: </b>{{$Mahasiswa->nama_barang}}</li>
                    <li class="list-group-item"><b>Tanggal Penjualan : </b>{{$Mahasiswa->tanggal_penjualan}}</li>
                    <li class="list-group-item"><b>Nama Pelanggan : </b>{{$Mahasiswa->nama_pelanggan}}</li>
                    <li class="list-group-item"><b>Jumlah : </b>{{$Mahasiswa->jumlah}}</li>
                    <li class="list-group-item"><b>Harga: </b>{{$Mahasiswa->harga}}</li>
                    <li class="list-group-item"><b>Supplier: </b>{{$Mahasiswa->supplier}}</li>
                    <li class="list-group-item"><b>keterangan: </b>{{$Mahasiswa->keterangan}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('mahasiswa.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection