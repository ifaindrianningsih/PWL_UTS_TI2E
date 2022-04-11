@extends('shintya_28.aksesoris.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DATA AKSESORIS PAKAIAN TERBARU</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('aksesoris.create') }}"> Input Data Aksesoris</a>
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
         <th>Gambar</th>
         <th>Bahan</th>
         <th>Harga</th>
         <th>Stok Awal</th>
         <th>Stok Akhir</th>
         <th width="280px">Action</th>
    </tr>
    @foreach ($aksesoris)
    <tr>
        <td>{{ $aksesoris->nama }}</td>
        <td><img src="{{$aksesoris->gambar}}" width='250' heigth='250'></td>
        <td>{{ $aksesoris->bahan }}</td>
        <td>{{ $aksesoris->harga }}</td>
        <td>{{ $aksesoris->stok_awal }}</td>
        <td>{{ $aksesoris->stok_akhir }}</td>
        <td>
            <form action="{{ route('aksesoris.destroy',$aksesoris->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('aksesoris.show',$aksesoris->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('aksesoris.edit',$aksesoris->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
 </table>
 {{ $aksesoris->links() }}
@endsection

