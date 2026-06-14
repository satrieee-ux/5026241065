<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SnackController extends Controller
{
    public function index()
    {
        $data = DB::table('snack')->get();

        return view('snack.index', compact('data'));
    }

    public function create()
    {
        return view('snack.create');
    }

    public function store(Request $request)
    {
        DB::table('snack')->insert([
            'merksnack' => $request->merksnack,
            'stocksnack' => $request->stocksnack,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/snack');
    }

    public function edit($id)
    {
        $snack = DB::table('snack')
            ->where('kodesnack', $id)
            ->first();

        return view('snack.edit', compact('snack'));
    }

    public function update(Request $request)
    {
        DB::table('snack')
            ->where('kodesnack', $request->kodesnack)
            ->update([
                'merksnack' => $request->merksnack,
                'stocksnack' => $request->stocksnack,
                'tersedia' => $request->tersedia
            ]);

        return redirect('/snack');
    }

    public function destroy($id)
    {
        DB::table('snack')
            ->where('kodesnack', $id)
            ->delete();

        return redirect('/snack');
    }
}
