@extends('anjani_06.layout')
 
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Mebel
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
                    <form method="post" action="{{ route('mebel_06.update',$mebel_06->id) }}" id="myForm">
                        @csrf
                        @method('PUT')                       
                        <div class="form-group">
                            <label for="nama">Nama</label> 
                            <input type="nama" name="nama" class="form-control" id="nama" value="{{ $mebel_06->nama }}" aria-describedby="nama" > 
                        </div>
                        <div class="form-group">
                            <label for="bahan">Bahan Dasar</label> 
                            <input type="bahan" name="bahan" class="form-control" id="bahan" value="{{ $mebel_06->bahan }}" aria-describedby="bahan" > 
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label> 
                            <input type="jenis" name="jenis" class="form-control" id="jenis" value="{{ $mebel_06->jenis }}" aria-describedby="jenis" > 
                        </div>
                        <div class="form-group">
                            <label for="kualitas">Kualitas</label> 
                            <input type="kualitas" name="kualitas" class="form-control" id="kualitas" value="{{ $mebel_06->kualitas }}" aria-describedby="kualitas" > 
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label> 
                            <input type="harga" name="harga" class="form-control" id="harga" value="{{ $mebel_06->harga }}" aria-describedby="harga" > 
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection