@extends('mahbub_19.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>DATA DOSEN POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-right my-2">
            <form action="{{ route('dosen.index') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit" >Search</button>
                    <div class="col-md">
                    <a class="btn btn-success" href="{{ route('dosen.create') }}"> Input Data Dosen</a>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>

@if($message=Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($dosen->count())
<table class="table table-bordered table-striped">
    <tr>
        <th>NIP </th>
        <th>Nama</th>
        <th>E-mail</th>
        <th>Jabatan</th>
        <th>Alamat</th>
        <th>TTL</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($dosen as $dsn)
    <tr>
        <td>{{ $dsn->nip }}</td>
        <td>{{ $dsn->nama }}</td>
        <td>{{ $dsn->email }}</td>
        <td>{{ $dsn->jabatan }}</td>
        <td>{{ $dsn->alamat }}</td>
        <td>{{ $dsn->ttl }}</td>
        <td>
            <form action="{{ route('dosen.destroy',['dosen'=>$dsn->nip]) }}" method="POST">
                <a class="btn btn-warning" href="{{ route('dosen.show',$dsn->nip) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('dosen.edit',$dsn->nip) }}">Edit</a>
            @csrf
            @method('DELETE') 
            <button type="submit" class="btn btn-danger">Delete</button>           
            </form>
        </td>
    </tr>
    @endforeach
</table>


    
@else
    <p class="text-center fs-4">Data tidak ditemukan.</p>
@endif

{{ $dosen->links() }}


@endsection
