@extends('akmalia_03.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>PERPUSTAKAAN POLITEKNIK NEGERI MALANG</h2>
            </div>

            <div class="float-left my-2">
                <form action="{{ route('search') }}" method="GET">
                    <div class="input-group mb-3">  
                        <input type="text" class="form-control" name="cari" size ="30" placeholder="Masukkan Nama Anggota">
                        <div class="input-group-append">
                            <button class="btn btn-info" type="submit">Search</button>
                        </div>
                    </div>   
                </form>   
            </div>

            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('anggota.create') }}"> Input Anggota</a>
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
            <th>Id</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal_Lahir</th>
            <th>Jurusan</th>
            <th>No_Handphone</th>
            <th width="290px">Action</th>
        </tr>
        @foreach ($anggota as $agt)
        <tr>

            <td>{{ $agt->id }}</td>
            <td>{{ $agt->nama }}</td>
            <td>{{ $agt->jk }}</td>
            <td>{{ $agt->tglLahir }}</td>
            <td>{{ $agt->jurusan }}</td>          
            <td>{{ $agt->no_handphone }}</td>
            <td>
            <form action="{{ route('anggota.destroy',$agt->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('anggota.show',$agt->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('anggota.edit',$agt->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
    @endforeach
    </table>
    {{ $anggota->links() }}
@endsection
