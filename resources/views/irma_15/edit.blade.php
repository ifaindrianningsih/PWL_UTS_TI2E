@extends('irma_15.layout')
 
@section('content')
 
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
        <div class="card-header">
            Edit Rumah
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
            <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Pemilik">Pemilik</label> 
                    <input type="text" name="pemilik" class="form-control" id="pemilik" value="{{ $rumah->pemilik }}" aria-describedby="pemilik" > 
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label> 
                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $rumah->alamat }}" aria-describedby="alamat" > 
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label> 
                    <input type="text" name="harga" class="form-control" id="harga" value="{{ $rumah->harga }}" aria-describedby="harga" > 
                </div>
                <div class="form-group">
                    <label for="warna">Warna</label> 
                    <input type="text" name="warna" class="form-control" id="warna" value="{{ $rumah->warna }}" aria-describedby="warna" > 
                </div>
                <div class="form-group">
                    <label for="tipe">Tipe</label> 
                    <input type="text" name="tipe" class="form-control" id="tipe" value="{{ $rumah->tipe }}" aria-describedby="tipe" > 
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection