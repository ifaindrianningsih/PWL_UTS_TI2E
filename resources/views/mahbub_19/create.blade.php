@extends('mahbub_19.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Data Dosen
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                <strong>Whoops!!</strong> There were some problems with your input. <br><br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                    </div>
            @endif
            <form method="POST" action="{{ route('dosen.store') }}" id="myform">
            @csrf
                <div class="form-group">
                    <label for="nip">NIP </label>
                    <input type="text" name="nip" class="form-control" id="nip" aria-describedby="nip" >
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" >
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" aria-describedby="email" >
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" id="jabatan" aria-describedby="jabatan" >
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" >
                </div>
                <div class="form-group">
                    <label for="ttl">TTL</label>
                    <input type="text" name="ttl" class="form-control" id="ttl" aria-describedby="ttl" >
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
    
@endsection