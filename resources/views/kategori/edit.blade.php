@extends('layouts.master')

@section('title', 'Aplikasi Laravel')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Edit Data Produk</h4>
            <br>
            <form action="{{route('kategori.update', $data->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kode">Kode Kategori <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="id" id="id" value="{{$data->id}}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Kategori <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" value="{{$data->nama_kategori}}">     
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <a href="{{url('kategori'}}" class="btn btn-succcess">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection