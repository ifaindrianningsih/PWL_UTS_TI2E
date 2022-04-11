@extends('bella_07.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Data Tv
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
                    <form method="post" action="{{ route('tv.update', $Tv->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{ $Tv->nama }}" aria-describedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" name="merk" class="form-control" id="merk" value="{{ $Tv->merk }}" aria-describedby="merk" >
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun Keluaran</label>
                            <input type="number" name="tahun" class="form-control" id="tahun" value="{{ $Tv->tahun }}" aria-describedby="tahun" >
                        </div>
                        <div class="form-group">
                            <label for="asal">Asal Negara</label>
                            <input type="text" name="asal" class="form-control" id="asal" value="{{ $Tv->asal }}" aria-describedby="asal" >
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" class="form-control" id="harga" value="{{ $Tv->harga }}" aria-describedby="harga" >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
