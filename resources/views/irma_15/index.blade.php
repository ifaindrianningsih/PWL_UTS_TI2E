@extends('irma_15.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>DAFTAR RUMAH </h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Rumah</a>
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
        <th>Pemilik</th>
        <th>Alamat</th>
        <th>Warna</th>
        <th>Harga</th>
        <th>Tipe</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($paginate as $rumah)
    <tr>
        <td>{{ $rumah ->pemilik }}</td>
        <td>{{ $rumah ->alamat }}</td>
        <td>{{ $rumah ->warna }}</td>
        <td>{{ $rumah ->harga }}</td>
        <td>{{ $rumah ->tipe }}</td>
        <td>
            <form action="{{ route('rumah_15.destroy',['rumah'=>$rumah_15->pemilik]) }}" method="POST">
                <a class="btn btn-info" href="{{ route('rumah_15.show',$rumah->pemilik) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('rumah_15.edit',$rumah->pemilik) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>

            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $paginate->links() }}
@endsection