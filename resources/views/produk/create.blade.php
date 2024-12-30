@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Form Input Data</h4>
            <br>
            @if($errors->any())
            <div class="alert alaert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('produk.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kode">Kode Produk <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="id" id="id">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Produk <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama_produk" id="nama_produk">
                </div>
                <div class="form-group">
                    <label for="nama">Kategori <span class="text-danger">*</span></label>
                    <select name="kategori" required>
                        @foreach ($kategori as $category)
                            <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga">Harga<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="harga" id="harga">
                </div>
                <div class="form-group">
                    <label for="stok">Stok<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="stok" id="stok">
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection