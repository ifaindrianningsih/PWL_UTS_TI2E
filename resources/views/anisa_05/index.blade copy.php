@extends('anisa_05.layout') 
 
@section('content') 
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mt-2">
 <h2>LEMARI ES</h2>
 </div>
 <div class="float-right my-2">
 <a class="btn btn-success" href="{{ route('anisa_05.create') }}"> Input Lemari Es</a>
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
 <th>Merek</th>
 <th>Jenis/th>
 <th>Warna</th>
 <th>Jumlah Pintu</th>
 <th>Berat</th>
 <th width="280px">Action</th>
 </tr>
 @foreach ($lemaries as $lm) 
 <tr>
 
 <td>{{ $lm ->merek }}</td>
 <td>{{ $lm ->jenis }}</td>
 <td>{{ $lm ->warna }}</td>
 <td>{{ $lm ->jumlah_pintu }}</td>
 <td>{{ $lm ->berat }}</td>
 <td>
 <form action="{{ route('lemaries.destroy',['lemaries'=>$lm->merek]) }}" method="POST">
 
 <a class="btn btn-info" href="{{ route('lemaries.show',$lm->nim) }}">Show</a>
 <a class="btn btn-primary" href="{{ route('lemaries.edit',$lm->nim) }}">Edit</a>
 @csrf 
 @method('DELETE') 
 <button type="submit" class="btn btn-danger">Delete</button> 
</form>
 </td>
 </tr>
 @endforeach 
 </table>
@endsection