@extends('anjani_06.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Mebel Start Your Future Company</h2>
            </div>
            <div class="float-left my-2">
                <a class="btn btn-success" href="{{ route('mebel_06.create') }}"> Input Mebel</a>
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
            <th>Bahan Dasar</th>
            <th>Jenis</th>
            <th>Kualitas</th>
            <th>Harga</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mebel_06 as $mebel)
        <tr>
            <td>{{ $mebel->nama }}</td>
            <td>{{ $mebel->bahan }}</td>
            <td>{{ $mebel->jenis }}</td>
            <td>{{ $mebel->kualitas }}</td>
            <td>{{ $mebel->harga }}</td>
            <td>
                <form action="{{ route('mebel_06.destroy',$mebel->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('mebel_06.show',$mebel->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('mebel_06.edit',$mebel->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="container">
        {{ $mebel_06->links() }}
    </div>
@endsection