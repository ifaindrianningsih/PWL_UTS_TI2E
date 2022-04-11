@extends('deatrisya_09.layout.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Pembayaran Barang
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong>There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            <form action="{{route('barang.update',$barang->id_barang)}}" method="POST" id=myForm>
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" aria-describedby="nama_barang" value="{{$barang->nama_barang}}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_barang">Jenis Barang</label>
                        <input type="text" name="jenis_barang" class="form-control" id="jenis_barang" aria-describedby="jenis_barang" value="{{$barang->jenis_barang}}">
                    </div>
                    <div class="form-group">
                        <label for="harga_satuan">Harga Satuan</label>
                        <input type="number" name="harga_satuan" class="form-control" id="harga_satuan" aria-describedby="harga_satuan" value="{{$barang->harga_satuan}}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="number" name="jumlah_barang" class="form-control" id="jumlah_barang" aria-describedby="jumlah_barang" value="{{$barang->jumlah_barang}}">
                    </div>
                    <div class="form-group">
                        <label for="total_harga">Total Harga</label>
                        <input type="text" name="total_harga" class="form-control" id="total_harga"
                            aria-describedby="total_harga" value="{{$barang->total_harga}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
