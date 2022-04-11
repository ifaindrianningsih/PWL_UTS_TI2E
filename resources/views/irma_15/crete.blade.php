@extends('irma_15.layout')
 
@section('content')
 
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
            Tambah Rumah
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
                    <label for="pemilik">Pemilik</label> 
                    <input type="text" name="alamat" class="form-control" id="pemilik" aria-describedby="pemilik" > 
                </div>
                <div class="form-group">
                    <label for="alamat">alamat</label> 
                    <input type="alamat" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" > 
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label> 
                    <input type="harga" name="harga" class="form-control" id="harga" aria-describedby="harga" > 
                </div>
                <div class="form-group">
                        <label for="warna">Warna</label>
                        <input type="warna" name="warna" class="form-control" id="warna" ariadescribedby="warna">
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <input type="tipe" name="tipe" class="form-control" id="tipe" ariadescribedby="tipe">
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection