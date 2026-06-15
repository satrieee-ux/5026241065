<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\MathCalculationRequest;

class TagihanController extends Controller
{
    public function index()
    {
        $data = DB::table('tagihan_air')->get();

        return view('UAS.index', compact('data'));
    }

    public function create()
    {
        return view('UAS.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
                'MeterAkhir' => 'required|integer|min:' . ($request->MeterAwal + 20),
                'MeterAwal' => 'required|integer',
            ]);

        DB::table('tagihan_air')->insert([
            'NoMeteran' => $request->NoMeteran,
            'MeterAkhir' => $request->MeterAkhir,
            'MeterAwal' => $request->MeterAwal
        ]);
        return redirect('/eas');
    }
}
