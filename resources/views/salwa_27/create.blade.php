@extends('salwa_27.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Smartphone
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
                    <form method="post" action="{{ route('salwa_27.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" name="id" class="form-control" id="id" aria-describedby="id">
                        </div>
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="merk" name="merk" class="form-control" id="merk" aria-describedby="merk">
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <input type="tipe" name="tipe" class="form-control" id="tipe" aria-describedby="password">
                        </div>
                        <div class="form-group">
                            <label for="warna">Warna</label>
                            <input type="warna" name="warna" class="form-control" id="warna"
                                aria-describedby="warna">
                        </div>
                        <div class="form-group">
                            <label for="kapasitas">Kapasitas</label>
                            <input type="kapasitas" name="kapasitas" class="form-control" id="kapasitas"
                                aria-describedby="kapasitas">
                        </div>
                        <div class="form-group">
                            <label for="sistem_operasi">Sistem Operasi</label>
                            <input type="sistem_operasi" name="sistem_operasi" class="form-control" id="sistem_operasi"
                                aria-describedby="sistem_operasi">
                        </div>
                        <div class="form-group">
                            <label for="ukuran_layar">Ukuran Layar</label>
                            <input type="ukuran_layar" name="ukuran_layar" class="form-control" id="ukuran_layar"
                                aria-describedby="ukuran_layar">
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat</label>
                            <input type="berat" name="berat" class="form-control" id="berat"
                                aria-describedby="berat">
                        </div>
                        <div class="form-group">
                            <label for="resolusi_kamera">Resolusi Kamera</label>
                            <input type="resolusi_kamera" name="resolusi_kamera" class="form-control" id="resolusi_kamera"
                                aria-describedby="resolusi_kamera">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="harga" name="harga" class="form-control" id="harga"
                                aria-describedby="harga">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection