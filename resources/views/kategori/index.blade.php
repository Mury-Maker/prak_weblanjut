@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')
<br>
<div class="container">
    <h2>Tabel Kategori</h2>
    <a href="{{route('kategori.create')}}" class="btn btn-succes">+New Data</a>
    <table class="table table-bordered table striped" id="tabel-kategori">
        <thead>
            <tr>
                <th style="width:1%">No.</th>
                <th style="width:5%">Kode Kategori</th>
                <th style="width:5%">Nama Kategori</th>
                <th style="width:5%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataKategori as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->id }}</td>
                <td>{{$data->nama_kategori }}</td>
                <td>
                    <form action="{{route('kategori.delete', $data->id)}}" method="post">@csrf
                        <a href="{{route('kategori.edit', $data->id)}}" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection