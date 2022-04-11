@extends('gilang_13.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Detail Mesin Cuci</div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Kode Barang: </b>{{ $mesin->kodebarang }}</li>
                        <li class="list-group-item"><b>Nama: </b>{{ $mesin->nama }}</li>
                        <li class="list-group-item"><b>Spesifikasi: </b>{{ $mesin->spesifikasi }}</li>
                        <li class="list-group-item"><b>Merk: </b>{{ $mesin->merk }}</li>
                        <li class="list-group-item"><b>Harga: </b>{{ $mesin->harga }}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('gilang_13.index') }}">Kembali</a>

            </div>
        </div>
    </div>
@endsection