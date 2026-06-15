<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\KeranjangBelanjaController ;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SnackController;
// Latihan Mandiri
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ProdukController;
// UAS
use App\Http\Controllers\TagihanController;

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
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']); //janlup ganti
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud tabel pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route keranjang belanja
Route::get(
    '/keranjang',
    [KeranjangBelanjaController::class, 'index']
);

Route::get(
    '/keranjang/create',
    [KeranjangBelanjaController::class, 'create']
);

Route::post(
    '/keranjang/store',
    [KeranjangBelanjaController::class, 'store']
);

Route::delete(
    '/keranjang/delete/{id}',
    [KeranjangBelanjaController::class, 'destroy']
);
Route::post(
    '/keranjang/beli/{id}',
    [KeranjangBelanjaController::class, 'beli']
);
// CRUD Nilai Kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah'])->name('nilaikuliah.tambah');
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');

//CRUD Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');


//CRUD Snack
Route::get('/snack', [SnackController::class, 'index']);
Route::get('/snack/create', [SnackController::class, 'create']);
Route::post('/snack/store', [SnackController::class, 'store']);
Route::get('/snack/edit/{id}', [SnackController::class, 'edit']);
Route::post('/snack/update', [SnackController::class, 'update']);
Route::delete('/snack/delete/{id}', [SnackController::class, 'destroy']);

//Buku Practice
Route::get('/buku', [BukuController::class, 'index']);
Route::post('/buku/pinjam/{id}', [BukuController::class, 'pinjam']);

//Produk Practice
Route::get('/produk', [ProdukController::class, 'index']);
Route::post('/produk/ambil/{id}', [ProdukController::class, 'ambil']);
Route::post('/produk/tambah/{id}', [ProdukController::class, 'tambah']);

// UAS
Route::get('/eas', [TagihanController::class, 'index']);
Route::get('/eas/create', [TagihanController::class, 'create']);
Route::post(
    '/eas/store',
    [TagihanController::class, 'store']
);
