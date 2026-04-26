<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo fauzan</h1> kahima HMSI 2026/2027 <b>www.instagram.com-</b>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('persatuan', function () {
    return view('pert1');
});

Route::get('perduaan', function () {
    return view('pert2');
});

Route::get('persatuan', function () {
    return view('pert1');
});

Route::get('pertigaan-tugas', function () {
    return view('pert3-tugas');
});

Route::get('pertigaan', function () {
    return view('pert3');
});

Route::get('perempatan', function () {
    return view('pert4');
});

Route::get('perlimaan-index', function () {
    return view('pert5-index');
});

Route::get('perlimaan-tugas', function () {
    return view('pert5-tugas');
});

Route::get('perlimaan', function () {
    return view('pert5');
});

Route::get('dosen',[DosenController::class, 'index']);


  Route::get('dosen',[DosenController::class, 'index']);
