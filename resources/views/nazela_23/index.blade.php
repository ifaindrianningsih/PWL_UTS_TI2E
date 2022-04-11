@extends('nazela_23.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>SHOE STORE</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('nazela_23.create') }}"> Input Mahasiswa</a>
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
        <th>ID</th>
        <th>Merk</th>
        <th>Warna</th>
        <th>Ukuran</th>
        <th>Jenis</th>
        <th>Harga</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($sepatu as $Sepatu)
    <tr>

        <td>{{ $Sepatu->id }}</td>
        <td>{{ $Sepatu->merk }}</td>
        <td>{{ $Sepatu->warna }}</td>
        <td>{{ $Sepatu->ukuran }}</td>
        <td>{{ $Sepatu->jenis }}</td>
        <td>{{ $Sepatu->harga }}</td>
        <td>
            <form action="{{ route('nazela_23.destroy',$Sepatu->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('nazela_23.show',$Sepatu->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('nazela_23.edit',$Sepatu->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
            Halaman : {{ $sepatu->currentPage() }} <br/>
            Jumlah Data : {{ $sepatu->total() }} <br/>
            Data Per Halaman : {{ $sepatu->perPage() }} <br/>
            <br>
            {{ $sepatu->links() }}
@endsection 