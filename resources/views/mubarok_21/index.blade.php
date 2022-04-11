@extends('mubarok_21.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Data Penjualan Barang PT. Adiguna Cahya Wasila</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Data Penjualan</a>
        </div>
    </div>
</div>

<!-- add search fiture -->
<div class="row justify-content-start">
            <div class="col-md-6">
                <form action="/mahasiswa">
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Masukkan Nama Barang" name="search"
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
        <th>Nama Barang</th>
        <th>Tanggal Penjualan</th>
        <th>Nama Pelanggan</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Supplier</th>
        <th>keterangan</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($post as $data)
    <tr>
        <td>{{ $data ->nama_barang }}</td>
        <td>{{ $data ->tanggal_penjualan }}</td>
        <td>{{ $data ->nama_pelanggan }}</td>
        <td>{{ $data ->jumlah }}</td>
        <td>{{ $data ->harga }}</td>
        <td>{{ $data ->supplier }}</td>
        <td>{{ $data ->keterangan }}</td>
        <td>
            <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$data->id_mahasiswa]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->id_mahasiswa) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->id_mahasiswa) }}">Edit</a>
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