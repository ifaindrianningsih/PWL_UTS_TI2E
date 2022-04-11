@extends('mahasiswa.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Tambah Karyawan
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
                <form method="post" action="{{ route('karyawan.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="Nama" name="nama" class="form-control" id="Nama" ariadescribedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="Jabatan">Jabatan</label>
                        <select class="form-control" name="jabatan_id">
                        @foreach($jabatan as $jbt)
                            <option value="{{$jbt->id}}">{{$jbt->nama_jabatan}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="JenisKelamin">Jenis Kelamin</label>
                        <select class="form-control" name="jeniskelamin_id">
                        @foreach($jeniskelamin as $jk)
                            <option value="{{$jk->id}}">{{$jk->jeniskelamin}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="NoHP">No Telepon</label>
                        <input type="noHP" name="jurusan" class="form-control" id="NoHP"
                            ariadescribedby="NoHP">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Email</label>
                        <input type="varchar" name="email" class="form-control" id="Email">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Alamat</label>
                        <input type="varchar" name="alamat" class="form-control" id="Alamat">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
