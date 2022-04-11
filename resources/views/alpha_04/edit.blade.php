@extends('mahasiswa.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Karyawan
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
                <form method="post" action="{{ route('mahasiswa.update', $karyawan->id_karyawan) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="Nama" value="{{ $Mahasiswa->nama }}"
                            aria-describedby="Nama">
                    </div>
                     <div class="form-group">
                        <label for="Jabatan">Jabatan</label>
                        <select class="form-control" name="jabatan_id">
                        @foreach($jabatan as $jbt)
                           <option value="{{$jbt->id}}" {{$Karyawan->jabtan_id ==$jbt->id ? 'selected' : '' }}>{{$jabatan->nama_jabatan}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Jabatan">Jenis Kelamin</label>
                        <select class="form-control" name="jeniskelamin_id">
                        @foreach($jensikelamin as $jk)
                           <option value="{{$jk->id}}" {{$Karyawan->jeniskelamin_id ==$jk->id ? 'selected' : '' }}>{{$jabatan->jeniskelamin}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="noHp">noHP</label>
                        <input type="noHp" name="noHp" class="form-control" id="noHp"
                            value="{{ $Karyawan->noHP }}" aria-describedby="noHp">
                    </div>
                     <div class="form-group">
                        <label for="Jurusan">Alamat</label>
                        <input type="varchar" name="alamat" value="{{ $karyawan->alamat }}"  class="form-control" id="Alamat">
                    </div>
                    <div class="form-group">
                        <label for="Jurusan">Email</label>
                        <input type="varchar" name="email" class="form-control" value="{{ $Karyawan->email }}"  id="Email">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
