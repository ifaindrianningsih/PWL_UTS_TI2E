@extends('ridho_26.layout')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Produk Minuman
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your i
                    nput.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('minuman.update', $Minuman->Id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Id">Id</label>
                        <input type="text" name="Id" class="form-control" id="Id" value="{{ $Minuman->Id }}" aria-describedby="Id">
                    </div>
                    <div class="form-group">
                        <label for="Merk">Merk</label>
                        <input type="text" name="Merk" class="form-control" id="Merk" value="{{ $Minuman->Merk }}" aria-describedby="Merk">
                    </div>
                    <div class="form-group">
                            <label for="Rasa">E-mail</label>
                            <input type="Rasa" name="Rasa" class="form-control" id="Rasa"
                                value="{{ $Minuman->Rasa }}" aria-describedby="Rasa">
                        </div>
                    <div class="form-group">
                            <label for="Expired">Expired</label>
                            <input type="Expired" name="Expired" class="form-control" id="Expired"
                                value="{{ $Minuman->Expired }}" aria-describedby="Expired">
                        </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="Harga" name="Harga" class="form-control" id="Harga" value="{{ $Minuman->Harga }}" aria-describedby="Harga">
                    </div>
                    <div class="form-group">
                        <label for="Berat">Berat</label>
                        <input type="Berat" name="Berat" class="form-control" id="Berat" value="{{ $Minuman->Berat }}" aria-describedby="Berat">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection