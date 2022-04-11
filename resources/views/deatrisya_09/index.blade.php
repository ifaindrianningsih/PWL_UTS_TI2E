@extends('deatrisya_09.layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center mt-4">
            <h2>Pembayaran Barang</h2>
        </div>
        <div class="col-md-12">
            <div class="float-right my-2 mt-2">
                <a class="btn btn-primary"href="{{route('barang.create')}}">Input Data</a>
           </div>
           @if ($message = Session::get('success'))
           <div class="alert alert-success">
               <p>{{$message}}</p>
           </div>
            @endif
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Total Harga</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                    <tr>
                    <td>{{$item->id_barang}}</td>
                    <td>{{$item->nama_barang}}</td>
                    <td>{{$item->jenis_barang}}</td>
                    <td>{{$item->harga_satuan}}</td>
                    <td>{{$item->jumlah_barang}}</td>
                    <td>{{$item->total_harga}}</td>
                    <td>
                        <form action="{{route('barang.destroy',$item->id_barang)}}" method="POST">
                            <a href="{{route('barang.show',$item->id_barang)}}" class="btn btn-info">Show</a>
                            <a href="{{route('barang.edit',$item->id_barang)}}" class="btn btn-info">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
          </table>

          <div class="paginate-button col-md-12">
            {{ $barang->links() }}
        </div>
    </div>
@endsection
