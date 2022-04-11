@extends('mubarok_21.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Penjualan
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
                <form method="post" action="{{ route('mahasiswa.update', $Mahasiswa->id_mahasiswa) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" 
                            aria-describedby="nama_barang">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="Tanggal Penjualan">Tanggal Penjualan</label>
                        <input type="date" name="tanggal_penjualan" class="form-control" id="tanggal_penjualan"
                             aria-describedby="tanggal_penjualan">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Nama Pelanggan</label>
                        <input type="varchar" name="nama_pelanggan" class="form-control"  id="nama_pelanggan">
                    </div>
                    <div class="form-group">
                        <label for="Jumlah">Jumlah</label>
                        <input type="integer" name="jumlah" class="form-control" id="jumlah">
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="integer" name="harga" class="form-control"  id="harga">
                    </div>
                     <div class="form-group">
                        <label for="Supplier">Supplier</label>
                        <input type="varchar" name="supplier" class="form-control"   id="supplier">
                    </div>
                     <div class="form-group">
                        <label for="Keterangan">Keterangan</label>
                        <input type="varchar" name="keterangan" class="form-control"  id="keterangan">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection