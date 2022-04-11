@extends('mahasiswa.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DATA MOTOR INDONESIA</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('motor.create') }}"> Input Data Motor</a>
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
            <th>Id_motor</th>
            <th>Kategori</th>
            <th>Nama</th>
            <th>Detail</th>
            <th>Harga</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($motors as $Motor)
        <tr>
        
            <td>{{ $Motor->Id_motor }}</td>
            <td>{{ $Motor->Kategori }}</td>
            <td>{{ $Motor->Nama }}</td>
            <td>{{ $Motor->Detail }}</td>
            <td>{{ $Motor->Harga }}</td>
            <td>
       
                <form action="{{ route('motor.destroy',['motor'=>$Motor->Id_motor]) }}" method="POST">
            
                <a class="btn btn-info" href="{{ route('motor.show',$Motor->Id_motor) }}">Tampil</a>
                <a class="btn btn-primary" href="{{ route('motor.edit',$Motor->Id_motor) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection