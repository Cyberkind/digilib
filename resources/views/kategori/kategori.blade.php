@extends('layout')
@section('home')
<div class="container">
<div class="mt-5 d-flex justify-content-end">
    <a href="{{url('kategori/tambah')}}" class="btn btn-primary">Tambah</a>
</div>


    <table class="table mt-3">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">aksi</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                
            <tr>
              <th scope="row">{{$item->kategoriid}}</th>
              <td>{{$item->nama_kategori}}</td>
              <td>
                <a href="{{url('kategori/edit/'.$item->kategoriid)}}" class="btn btn-success">Edit</a>
                <a href="kategori/hapus/{{$item->kategoriid}}" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            @endforeach
          
        </tbody>
      </table>

    
</div>
@endsection