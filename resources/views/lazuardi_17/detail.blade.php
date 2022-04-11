@extends('lazuardi_17.layouts')

@section('content')
<div class="">
    <h1 class="text-center mt-4 mb-3">Detail Barang</h1>
    <hr>
    <div class="d-flex justify-content-start mb-2">
        <a href="/BarangElektronik" class="btn btn-primary">Kembali</a>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="{{ asset('img/lazuardi_17/laptop.jpg') }}" alt="" height="350px">
        </div>
        <div class="col-md-6">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Nama Barang</th>
                        <td>{{ $Barang -> nama_barang }}</td>
                    </tr>
                    <tr>
                        <th>Merk</th>
                        <td>{{ $Barang -> merk }}</td>
                    </tr>
                    <tr>
                        <th>Warna</th>
                        <td>{{ $Barang -> warna}}</td>
                    </tr>
                    <tr>
                        <th>Ukuran</th>
                        <td>{{ $Barang -> ukuran }}</td>
                    </tr>
                    <tr>
                        <th>Harga</th>
                        <td>{{ number_format($Barang -> harga) }}</td>
                    </tr>
                    <tr>
                        <th>Stok</th>
                        <td>{{ $Barang -> stok }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection