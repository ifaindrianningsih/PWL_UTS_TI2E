@extends('firgi_12.layout.main')
@section('content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Nama</th>
        <th scope="col">Merk</th>
        <th scope="col">Harga</th>
        <th scope="col">Gambar</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($laptops as $laptop)

        @endforeach
      <tr>
        <th>{{ $laptop->name }}</th>
        <td>{{ $laptop->merk }}</td>
        <td>{{ $laptop->harga }}</td>
        <td>{{ $laptop->gambar }}</td>
        <td>
            <form action="/firgi_12/laptop/index" method="POST">

                <a class="btn btn-info" href="/firgi_12/laptop/show/{{ $laptop->slug }}">Show</a>

                <a class="btn btn-primary" href="/firgi_12/laptop/{{ $laptop->slug }}/edit">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
        </td>
      </tr>
    </tbody>
  </table>
@endsection
