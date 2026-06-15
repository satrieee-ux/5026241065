<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $data = DB::table('produk')->get();
        return view('latihanmandiri.produk.index', compact('data'));
    }

    public function ambil($id)
    {
        $produk = DB::table('produk')
            ->where('id', $id)
            ->update(['aktif' => false]);

        return redirect('/produk');
    }
    public function tambah($id)
{
    $item = DB::table('produk')
        ->where('id', $id)
        ->first();

    DB::table('produk')
        ->where('id', $id)
        ->update([
            'Jumlah' => $item->Jumlah + 1
        ]);

    return redirect('/produk');
}

}
