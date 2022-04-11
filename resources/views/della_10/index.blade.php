@extends('della_10.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Bag's Shop</h2>
            </div>
            <div class="float-right my-2"> <a class="btn btn-success" href="{{ route('tas.create') }}"> Input
                    Tas</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div>
        {{-- <form class=" form-inline pt-1" action="{{ route('search') }}" method="GET">
            <div class="form-group">
                <label class="sr-only" for="keyword"></label>
                <input type="text" name="keyword" class="form-control mr-md-2 semail" placeholder="Cari merkTas Tas_10">
            </div>
            <button type="submit" class="btn btn-outline-primary">Search</button>
        </form> --}}
    </div>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>merkTas</th>
            <th>harga</th>
            <th>stok</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tas_10 as $Tas_10)
            <tr>
                <td>{{ $Tas_10->id }}</td>
                <td>{{ $Tas_10->merkTas }}</td>
                <td>{{ $Tas_10->tanggalLahir }}</td>
                <td>{{ $Tas_10->stok }}</td>
                <td>{{ $Tas_10->kategori }}</td>
                <td>{{ $Tas_10->deskripsi }}</td>
                <td>
                    <form action="{{ route('tas.destroy', $Tas_10->id) }}" method="POST"> <a
                            class="btn btn-info" href="{{ route('tas.show', $Tas_10->id) }}">Show</a> <a
                            class="btn btn-primary" href="{{ route('tas.edit', $Tas_10->id) }}">Edit</a>
                        @csrf
                        @method('DELETE') <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $tas_10->links() }}
    <br><br>
  
    @endsection
