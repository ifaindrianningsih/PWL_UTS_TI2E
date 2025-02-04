@extends('ifa_14.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Baju
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
                    <form method="post" action="{{ route('baju.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="nama_baju">Nama Baju</label>
                            <input type="text" name="nama_baju" class="form-control" id="nama_baju" aria-describedby="nama_baju" >
                        </div>
                        <div class="form-group">
                            <label for="bahan">Bahan</label>
                            <input type="text" name="bahan" class="form-control" id="bahan" aria-describedby="bahan" >
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" class="form-control" id="stok" aria-describedby="stok" >
                        </div>
                        <div class="form-group">
                            <label for="motif">Motif</label>
                            <input type="text" name="motif" class="form-control" id="motif" aria-describedby="motif" >
                        </div>
                        <div class="form-group">
                            <label for="warna">Warna</label>
                            <input type="text" name="warna" class="form-control" id="warna" aria-describedby="warna" >
                        </div>
                        <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <input type="text" name="ukuran" class="form-control" id="ukuran" aria-describedby="ukuran" >
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="harga" name="harga" class="form-control" id="harga" aria-describedby="harga" >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection