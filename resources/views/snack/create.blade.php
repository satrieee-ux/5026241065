@extends('template')
@section('title', 'Tambah Snack')
@section('konten')

<h2>Tambah Snack</h2>

<form action="/snack/store" method="POST">

    @csrf

    <div class="mb-3">

        <label>Merk Snack</label>

        <input
            type="text"
            name="merksnack"
            class="form-control"
            required>

    </div>

    <div class="mb-3">

        <label>Stock Snack</label>

        <input
            type="number"
            name="stocksnack"
            class="form-control"
            required>

    </div>

    <div class="mb-3">

        <label>Tersedia</label>

        <select
            name="tersedia"
            class="form-control">

            <option value="Y">
                Ya
            </option>

            <option value="N">
                Tidak
            </option>

        </select>

    </div>

    <button
        type="submit"
        class="btn btn-success">

        Simpan

    </button>

    <a href="/snack"
       class="btn btn-secondary">

       Kembali

    </a>

</form>

@endsection
