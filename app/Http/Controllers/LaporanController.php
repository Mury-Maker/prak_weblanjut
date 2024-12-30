<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Exports\ProdukExport;
use Maatwebsite\Excel\Facades\Excel;


class LaporanController extends Controller
{
    public function index(){
        $data = Produk::all();
        return view('laporan', ['dataProduk' => $data]);
    }
}
