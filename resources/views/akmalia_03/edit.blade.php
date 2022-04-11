@extends('akmalia_03.layout')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Anggota
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
                <form method="post" action="{{ route('anggota.update', $anggota->id) }}" id="myForm">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" name="id" class="form-control" id="id" value="{{ $anggota->id }}" ariadescribedby="id" >
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $anggota->nama }}" ariadescribedby="nama" >
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="text" name="jk" class="form-control" id="jk" value="{{ $anggota->jk }}" ariadescribedby="jk" >
                    </div>
                    <div class="form-group">
                        <label for="tglLahir">Tanggal Lahir</label>              
                        <input type="date" name="tglLahir" class="form-control" id="tglLahir" value="{{ $anggota->tglLahir }}" ariadescribedby="tglLahir" >
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="jurusan" name="jurusan" class="form-control" id="jurusan" value="{{ $anggota->jurusan }}" ariadescribedby="jurusan" >
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">No_Handphone</label>              
                        <input type="no_handphone" name="no_handphone" class="form-control" id="no_handphone" value="{{ $anggota->no_handphone }}" ariadescribedby="no_handphone" >
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
   </div>
@endsection