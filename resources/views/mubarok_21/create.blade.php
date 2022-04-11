@extends('mubarok_21.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Tambah Data Penjualan Barang
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('mahasiswa.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="NamaBarang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="NamaBarang" aria-describedby="NamaBarang">
                    </div>
                    <div class="form-group">
                        <label for="TanggalPenjualan">Tanggal Penjualan</label>
                        <input type="TanggalPenjualan" name="tanggal_penjualan" class="form-control" id="TanggalPenjualan" ariadescribedby="TanggalPenjualan">
                    </div>
                    <div class="form-group">
                        <label for="Nama_Pelanggan">Nama Pelanggan</label>
                        <input type="Nama_Pelanggan" name="nama_pelanggan" class="form-control" id="nama_pelanggan"
                            ariadescribedby="nama_pelanggan">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Jumlah</label>
                        <input type="integer" name="jumlah" class="form-control" id="jumlah">
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="integer" name="harga" class="form-control" id="harga">
                    </div>
                    <div class="form-group">
                        <label for="Supplier">Supplier</label>
                        <input type="varchar" name="supplier" class="form-control" id="supplier">
                    </div>
                     <div class="form-group">
                        <label for="Keterangan">Keterangan</label>
                        <input type="varchar" name="keterangan" class="form-control" id="keterangan">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection