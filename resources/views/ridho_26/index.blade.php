@extends('ridho_26.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>TOKO MINUMAN</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('minuman.create') }}"> Input Minuman</a>
        </div>
    </div>
</div>

    <form class="form" method="get" action="{{ route('search') }}">
        <div class="form-group w-100 mb-3">
            <label for="search" class="d-block mr-2">
                <h4>Search</h4>
            </label>
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Search...">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </form>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Merk</th>
        <th>Rasa</th>
        <th>Expired</th>
        <th>Harga</th>
        <th>Berat</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($minuman as $Minuman)
    <tr>

        <td>{{ $Minuman->Id }}</td>
        <td>{{ $Minuman->Merk }}</td>
        <td>{{ $Minuman->Rasa }}</td>
        <td>{{ $Minuman->Expired }}</td>
        <td>{{ $Minuman->Harga }}</td>
        <td>{{ $Minuman->Berat }}</td>
        <td>
            <form action="{{ route('minuman.destroy',$Minuman->Id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('minuman.show',$Minuman->Id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('minuman.edit',$Minuman->Id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
