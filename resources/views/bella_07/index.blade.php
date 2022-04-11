@extends('bella_07.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2 align="center">LIST DATA TABEL TV - UTS PWL</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('tv.create') }}"> Input Data</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    {{-- Menampilkan Search Box Pada Halaman Utama --}}
    <form method="get" action="{{ url('cari') }}">
        <div class="form-group w-100 mb-3">
            <input type="search" name="search" class="form-control w-75 d-inline" id="search" placeholder="Ketik disini apapun tentang Tv">
            <span class = "form-group-btn">
                <button type="submit" class="btn btn-dark">Cari Disini</button>
            </span>
        </div>
    </form>

    <table class="table table-bordered text-center">
        <tr>
            <th>Nama</th>
            <th>Merk</th>
            <th>Tahun Keluaran</th>
            <th>Asal</th>
            <th>Harga</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($tv as $T)
        <tr>
            <td>{{ $T->nama }}</td>
            <td>{{ $T->merk }}</td>
            <td>{{ $T->tahun }}</td>
            <td>{{ $T->asal }}</td>
            <td>Rp. {{ $T->harga }}</td>
            <td>
                <form action="{{ route('tv.destroy',$T->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('tv.show',$T->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('tv.edit',$T->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <p>Showing
        {{$tv->firstItem()}}
        to
        {{$tv->lastItem()}}
        of
        {{$tv->total()}}
        entries</p>
     </div>
    <div class="d-flex justify-content-center">
        {{$tv->links()}}
    </div>
@endsection
