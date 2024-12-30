@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>Form Input Data</h4>
            <br>
            <form action="{{route('kategori.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kode">Kode Kategori <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="id" id="id">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Kategori <span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nama_kategori" id="nama_kategori">
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{url('kategori')}}" class="btn btn-success">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection