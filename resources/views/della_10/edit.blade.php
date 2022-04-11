@extends('della_10.layout')
@section('content')
<div class="row justify-content-center align-items-center">
    <div class="card" style="width: 24rem;">
        <div class="card-header"> Edit Tas Della</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger"> <strong>Whoops!</strong> There were some problems with your
                    input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif <form method="post" action="{{ route('tas.update', $Tas_10->id) }}" id="myForm">
                    @csrf @method('PUT')
                    <div class="form-group"> <label for="id">id</label> <input type="text" name="id"
                            class="form-control" id="id" value="{{ $Tas_10->id }}" aria-describedby="id">
                    </div>
                    <div class="form-group"> <label for="merkTas">Merk Tas</label> <input type="merkTas" name="merkTas"
                            class="form-control" id="merkTas" value="{{ $Tas_10->merkTas }}"
                            aria-describedby="merkTas"> </div>
                    <div class="form-group"> <label for="harga">Harga</label> <input type="date" name="harga"
                            class="form-control" id="harga" value="{{ $Tas_10->harga }}" aria-describedby="harga">
                    </div>
                    <div class="form-group"> <label for="stok">Stok</label> <input type="stok"
                        name="stok" class="form-control" id="stok" value="{{ $Tas_10->stok }}"
                        aria-describedby="stok"> </div>
                    <div class="form-group"> <label for="kategori">Kategori</label> <input type="text"
                            name="kategori" class="form-control" id="kategori" value="{{ $Tas_10->kategori }}"
                            aria-describedby="kategori"> </div>
                    <div class="form-group"> <label for="deskripsi">Deskripsi</label> <input type="deskripsi"
                            name="deskripsi" class="form-control" id="deskripsi" value="{{ $Tas_10->deskripsi }}"
                            aria-describedby="deskripsi"> </div>
        </div><button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</div> 
@endsection
