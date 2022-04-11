@extends('karyawan.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Data Karyawan</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('karyawan.create') }}"> Input Karyawan</a>
        </div>
    </div>
</div>

<!-- add search fiture -->
<div class="row justify-content-start">
            <div class="col-md-6">
                <form action="/karyawan">
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Masukkan Nama Karyawan" name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-info" type="submit" id="button-addon2"><img
                                src="{{ asset('img/search.png') }}" alt="" height="20px">Cari</button>
                    </div>
                </form>
            </div>
        </div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>Id Karyawan</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Email</th>
        <th width="300px">Action</th>
    </tr>
    @foreach ($post as $kyw)
    <tr>
        <td>{{ $kyw ->id_karyawan }}</td>
        <td>{{ $kyw ->nama }}</td>
        <td>{{ $kyw ->kelas->nama_kelas }}</td>
        <td>{{ $kyw ->jenis_kelamin }}</td>
        <td>{{ $kyw ->noHP }}</td>
        <td>{{ $kyw ->alamat }}</td>
        <td>{{ $kyw ->email }}</td>
        <td>
            <form action="{{ route('karyawan.destroy',['karyawan'=>$mhs->id_karyawan]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('karyawan.show',$mhs->id_karyawan) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('karyawan.edit',$mhs->id_karyawan) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="d-flex justify-content-center">
    {{ $post -> links() }}
</div>
@endsection
