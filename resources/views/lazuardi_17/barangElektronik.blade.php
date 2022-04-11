@extends('lazuardi_17.layouts')

@section('content')
<h1 class="text-center mt-4 mb-3">Menampilkan Barang-barang elektronik</h1>
<hr>
<div class="d-flex justify-content-end mb-2">
    <a href="/BarangElektronik/create" class="btn btn-primary">Tambahkan Data Baru</a>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Foto</th>
            <th scope="col">Merk</th>
            <th scope="col">Warna</th>
            <th scope="col">Ukuran</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barangs as $barang)
        <tr>
            <th scope="row">{{ $loop-> iteration }}</th>
            <td>{{ $barang -> nama_barang }}</td>
            <td>
                <img src="{{ asset('img/lazuardi_17/'.$barang -> foto) }}" alt="" width="100px">
            </td>
            <td>{{ $barang -> merk }}</td>
            <td>{{ $barang -> warna }}</td>
            <td>{{ $barang -> ukuran }}</td>
            <td>Rp. {{ number_format($barang -> harga) }}</td>
            <td>{{ $barang -> stok }}</td>
            <td>
                <form action="/BarangElektronik/{{ $barang -> id }}" method="POST">
                    <a class="btn btn-success" href="{{ route('BarangElektronik.show',$barang->id) }}">Show</a>
                    <a class="btn btn-warning" href="{{ route('BarangElektronik.edit',$barang->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection