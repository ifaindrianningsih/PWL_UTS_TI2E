@extends('dani_08.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Sistem Sekolah</h2>
            </div>
            <div class="float-left my-2">
                <a class="btn btn-success" href="{{ route('sekolah.create') }}"> Input Sekolah</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Telp</th>
            <th>Jumlah Siswa</th>
            <th>Akreditasi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($Sekolah as $s)
        <tr>
            <td>{{$s->nama}}</td>
            <td>{{$s->alamat}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->notelp}}</td>
            <td>{{$s->jumlahsiswa}}</td>
            <td>{{$s->akreditasi}}</td>
            <td>
                <form action="{{ route('sekolah.destroy',$s->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('sekolah.show',$s->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('sekolah.edit',$s->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="container">
        {{ $Sekolah->links() }}
    </div>
@endsection
