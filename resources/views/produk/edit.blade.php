@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Edit Data Produk</h4>
            <br>
            <form action="{{route('produk.update', $data->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kode">Kode Produk <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="id" id="id" value="{{$data->id}}">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Produk <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama_produk" id="nama_produk" value="{{$data->nama_produk}}">
                </div>
                <div class="form-group">
                    <label class="form-label">Kategori</label>
                    <select name="form-control" id="kategori" name="kategori" value="{{ $data->kategori_id }}">
                    @foreach ($kat as $cat)
                    <option value="{{ $cat->id }}" 
                                        {{ $cat->id == $data->kategori_id ? 'selected' : '' }}>
                                        {{ $cat->nama_kategori }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga">Harga <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="harga" id="harga" value="{{$data->harga}}">
                </div>
                <div class="form-group">
                    <label for="stok">Stok <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="stok" id="stok" value="{{$data->stok}}">
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <a href="{{ url('tampil-produk') }}" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection