@extends('afvanie_01.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>TOKO SEPEDA BERKAT JAYA</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('sepeda.create') }}"> Input Sepeda</a>
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
            <th>Jenis Sepeda</th>
            <th>Merk</th>
            <th>Ukuran</th>
            <th>Warna</th>
            <th>Harga</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($sepeda as $Sepeda)
        <tr>
            <td>{{ $Sepeda->id }}</td>
            <td>{{ $Sepeda->jenis_sepeda }}</td>
            <td>{{ $Sepeda->merk }}</td>
            <td>{{ $Sepeda->ukuran }}</td>
            <td>{{ $Sepeda->warna }}</td>
            <td>{{ $Sepeda->harga }}</td>
            <td>
                <form action="{{ route('sepeda.destroy',$Sepeda->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('sepeda.show',$Sepeda->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('sepeda.edit',$Sepeda->id) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$Sepeda->links()}}
@endsection
