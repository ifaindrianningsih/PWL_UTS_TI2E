@extends('salwa_27.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>IBOX INDONESIA - JAKARTA</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('salwa_27.create') }}"> Input Smartphone</a>
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
            <th>Tipe</th>
            <th>Warna</th>
            <th>Kapasitas</th>
            <th>Sistem Operasi</th>
            <th>Ukuran layar</th>
            <th>Berat</th>
            <th>Resolusi kamera</th>
            <th>Harga</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($smartphone as $hp)
            <tr>

                <td>{{ $hp->id }}</td>
                <td>{{ $hp->merk }}</td>
                <td>{{ $hp->tipe }}</td>
                <td>{{ $hp->warna }}</td>
                <td>{{ $hp->kapasitas }}</td>
                <td>{{ $hp->sistem_operasi }}</td>
                <td>{{ $hp->ukuran_layar }}</td>
                <td>{{ $hp->berat }}</td>
                <td>{{ $hp->resolusi_kamera }}</td>
                <td>{{ $hp->harga }}</td>
                <td>
                    <form action="{{ route('salwa_27.destroy', $hp->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('salwa_27.show', $hp->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('salwa_27.edit', $hp->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
            Halaman : {{ $smartphone->currentPage() }} <br/>
            Jumlah Data : {{ $smartphone->total() }} <br/>
            Data Per Halaman : {{ $smartphone->perPage() }} <br/>
            <br>
            {{ $smartphone->links() }}
@endsection