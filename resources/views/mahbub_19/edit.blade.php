@extends('mahbub_19.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Data Dosen
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                <strong>Whoops!!</strong> There were some problems with your input . <br><br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                    </div>
            @endif
            <form method="POST" action="{{ route('dosen.update', $dosen->nip) }}" id="myform">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" name="nip" class="form-control" id="nip" value="{{ $dosen->nip }}" aria-describedby="nip" >
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $dosen->nama }}" aria-describedby="nama" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="{{ $dosen->email }}" aria-describedby="email" >
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{ $dosen->jabatan }}" aria-describedby="jabatan" >
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $dosen->alamat }}" aria-describedby="alamat" >
                </div>
                <div class="form-group">
                    <label for="ttl">TTL</label>
                    <input type="text" name="ttl" class="form-control" id="ttl" value="{{ $dosen->ttl }}" aria-describedby="ttl" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
    
@endsection