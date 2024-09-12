<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;

class BukuController extends Controller
{
    public function index (){
        $data_buku = BukuModel::all()->sortByDesc('id');
        $sum = BukuModel::sum('harga');
        $total = BukuModel::count();

        return view('buku.index', compact('data_buku', 'sum', 'total'));
    }
}
