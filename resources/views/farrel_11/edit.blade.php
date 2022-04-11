@extends('produkmakanan.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            <h2>PRODUK MAKANAN</h2>
            </div>
            <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('produkmakanan.create') }}"> Input Data Produk Makanan</a>
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
        <th>Id_Produk</th>
        <th>Merk</th>
        <th>Harga</th>
        <th>Jenis</th>
        <th width="300px">Action</th>
    </tr>
    @foreach ($ProdukMakanan as $produkmakanan)
    <tr>

    <td>{{ $ProdukMakanan->Id_Produk}}</td>
    <td>{{ $ProdukMakanan->Merk }}</td>
    <td>{{ $ProdukMakanan->Harga }</td>
    <td>{{ $ProdukMakanan->Jenis}}</td>

    <td>
    <form action="{{ route('produkmakanan.destroy',$produkmakanan->Id_Pegawai) }}" method="POST">

    <a class="btn btn-info" href="{{ route('produkmakanan.show',$produkmakanan->Id_Pegawai) }}">Show</a>
    <a class="btn btn-primary" href="{{ route('produkmakanan.edit',$produkmakanan->Id_Pegawai) }}">Edit</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
        </tr>
        @endforeach
    </table>

    <br><br>

@endsection
