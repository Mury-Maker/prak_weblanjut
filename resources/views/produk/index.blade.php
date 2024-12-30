@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')
<br>
<div class="container">
    <h2>Tabel Produk</h2>
    <a href="{{route('produk.create')}}" class="btn-success">+Tambah Data</a>
    <a href="{{route('produk.excel')}}" class="btn-primary">Excel</a>
    <a href="{{route('produk.pdf')}}" class="btn btn-secondary pull-right" target="_blank">PDF</a>
    <a href="{{route('chart')}}" class="btn btn-dark">Chart</a>
    <table class="table table-bordered table striped" id="table-produk">
        <thead>
            <tr>
                <th style="width: 1%;">No.</th>
                <th style="width: 5%;">Kode Produk</th>
                <th style="width: 5%;">Nama Produk</th>
                <th style="width: 5%;">Kategori</th>
                <th style="width: 5%;">Harga</th>
                <th style="width: 5%;">Stok</th>
                <th style="width: 5%;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataProduk as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama_produk }}</td>
                <td>{{ $data->kategori->nama_kategori}}</td>
                <td>{{ number_format($data->harga, 0, '.', '.') }}</td>
                <td>{{ $data->stok }}</td>
                <td>
                    <form action="{{route('produk.delete', $data->id)}}" method="post">@csrf
                        <a href="{{route('produk.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
