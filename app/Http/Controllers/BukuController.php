<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
        $data = DB::table('buku')->get();
        return view('latihanmandiri.buku.index', compact('data'));
    }

    public function pinjam($id)
    {
        $buku = DB::table('buku')
            ->where('id', $id)
            ->update(['sedang_dipinjam' => true]);

        return redirect('/buku');
    }
}
