@extends('layout')
@section('home')
    <div class="container">
      <h2 class="mt-2">Form tambah kategori</h2>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{url('kategori/tambah')}}" method="POST" class="mt-5">
           @csrf 
            <div class="mb-3">
              <label for="kategori" class="form-label">Nama Kategori</label>
              <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Enter Kategori name" autofocus>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection