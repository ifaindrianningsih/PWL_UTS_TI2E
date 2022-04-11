@extends('nazela_23.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Sepatu
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('nazela_23.update', $Sepatu->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" class="form-control" id="id" value="{{ $Sepatu->id }}" aria-describedby="id">
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" class="form-control" id="merk" value="{{ $Sepatu->merk }}" aria-describedby="merk">
                    </div>
                    <div class="form-group">
                        <label for="warna">Warna</label>
                        <input type="warna" name="warna" class="form-control" id="warna" value="{{ $Sepatu->warna }}" aria-describedby="warna">
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran</label>
                        <input type="ukuran" name="ukuran" class="form-control" id="ukuran" value="{{ $Sepatu->ukuran }}" aria-describedby="ukuran">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <input type="jenis" name="jenis" class="form-control" id="jenis" value="{{ $Sepatu->jenis }}" aria-describedby="jenis">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="harga" name="harga" class="form-control" id="harga" value="{{ $Sepatu->harga }}" aria-describedby="harga">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection