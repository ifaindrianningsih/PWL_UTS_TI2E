@extends('anisa_05.layout') 
 
@section('content') 
 
<div class="container mt-5">
 
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit Lemari Es 
 </div>
 <div class="card-body">
 @if ($errors->any()) 
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your input.<br><br>
 <ul>
 @foreach ($errors->all() as $error) 
 <li>{{ $error }}</li>
 @endforeach 
 </ul>
 </div>
 @endif 
 <form method="post" action="{{ route('lemaries.update', $lemaries->merek) }}" id="myForm">
 @csrf 
 @method('PUT') 
 <div class="form-group">
 <label for="merek">Merek</label> 
 <input type="text" name="merek" class="form-control" id="merek" value="{{ $lemaries->merek }}" aria-describedby="merek" > 
 </div>
 <div class="form-group">
 <label for="jenis">Nama</label> 
 <input type="text" name="jenis" class="form-control" id="jenis" value="{{ $lemaries>nama }}" aria-describedby="jenis" > 
 </div>
 <div class="form-group">
 <label for="warna">Warna</label> 
 <input type="text" name="warna" class="form-control" id="warna" value="{{ $lemaries>nama }}" aria-describedby="warna" > 
 </div>
 <div class="form-group">
 <label for="jumlah_pintu">Jumlah Pintu</label> 
 <input type="jumlah_pintu" name="jumlah_pintu" class="form-control" id="jumlah_pintu" value="{{ $lemaries>jumlah_pintu }}" aria-describedby="Jurusan" > 
 </div>
 div class="form-group">
 <label for="berat">Berat</label> 
 <input type="berat" name="berat" class="form-control" id="berat" value="{{ $lemaries>berat }}" aria-describedby="berat" > 
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
</div>
@endsection