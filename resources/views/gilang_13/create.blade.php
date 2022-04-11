@extends('gilang_13.layout')
@section('content')
    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Tambah Mesin Cuci</div>
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
                    <form method="post" action="{{ route('mesincuci13.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="kodebarang">Kode Barang</label>
                            <input type="text" name="kodebarang" class="form-control" id="kodebarang" aria-describedby="kodebarang">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="spesifikasi">Spesifikasi</label>
                            <input type="spesifikasi" name="spesifikasi" class="form-control" id="spesifikasi" aria-describedby="password">
                        </div>
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="merk" name="merk" class="form-control" id="merk"
                                aria-describedby="merk">
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