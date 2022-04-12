@extends('ifa_14.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('baju.create') }}"> Input Baju</a>
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
            <th>Nama Baju</th>
            <th>Bahan</th>
            <th>Stok</th>
            <th>Motif</th>
            <th>Warna</th>
            <th>Ukuran</th>
            <th>Harga</th>
            <th width="290px">Action</th>
        </tr>
        @foreach ($baju as $b)
        <tr>

            <td>{{ $b ->nama_baju }}</td>
            <td>{{ $b ->bahan }}</td>
            <td>{{ $b ->stok }}</td>
            <td>{{ $b ->motif }}</td>
            <td>{{ $b ->warna }}</td>
            <td>{{ $b ->ukuran }}</td>
            <td>{{ $b ->harga }}</td>
            <td>
            <form action="{{ route('baju.destroy',['baju'=>$b->id_baju]) }}" method="POST">

                <a class="btn btn-info" href="{{ route('baju.show',$b->id_baju) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('baju.edit',$b->id_baju) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection