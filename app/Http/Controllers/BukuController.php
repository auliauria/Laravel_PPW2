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

    public function create(){
        return view('buku.create');
    }

    public function store(Request $request){
        $buku = new BukuModel();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();

        return redirect('/buku');
    }

    public function destroy($id){
        $buku = BukuModel::find($id);
        $buku->delete();

        return redirect('/buku');
    }

    public function edit($id){
        $buku = BukuModel::find($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id){
        $buku = BukuModel::find($id);
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();

        return redirect('/buku');
    }
}
