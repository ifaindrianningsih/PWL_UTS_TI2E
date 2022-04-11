@extends('mobil.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            <h2>JUAL MOBIL</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mobil.create') }}"> Input Mobil</a>
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
            <th>Id_Mobil</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Spesifikasi</th>
            <th>Kelebihan</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($mobil as $mb)
        <tr>
   
            <td>{{ $mb ->id_mobil }}</td>
            <td>{{ $mb ->nama }}</td>
            <td>{{ $mb ->harga }}</td>
            <td>{{ $mb ->spesifikasi }}</td>
            <td>{{ $mb ->kelebihan }}</td>
            <td>{{ $mb ->kekurangan }}</td>
            <td>
            <form action="{{ route('mobil.destroy',['mobil'=>$mhs->nim]) }}" method="POST">
   
                <a class="btn btn-info" href="{{ route('mobil.show',$mhs->nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mobil.edit',$mhs->nim) }}">Edit</a>
                @csrf
                @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
    </table>
@endsection
