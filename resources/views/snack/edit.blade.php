@extends('template')
@section('title', 'Edit Snack')
@section('konten')

<h2>Edit Snack</h2>

<form action="/snack/update" method="POST">

    @csrf

    <input
        type="hidden"
        name="kodesnack"
        value="{{ $snack->kodesnack }}">

    <div class="mb-3">

        <label>Merk Snack</label>

        <input
            type="text"
            name="merksnack"
            class="form-control"
            value="{{ $snack->merksnack }}"
            required>

    </div>

    <div class="mb-3">

        <label>Stock Snack</label>

        <input
            type="number"
            name="stocksnack"
            class="form-control"
            value="{{ $snack->stocksnack }}"
            required>

    </div>

    <div class="mb-3">

        <label>Tersedia</label>

        <select
            name="tersedia"
            class="form-control">

            <option
                value="Y"
                {{ $snack->tersedia == 'Y' ? 'selected' : '' }}>
                Ya
            </option>

            <option
                value="N"
                {{ $snack->tersedia == 'N' ? 'selected' : '' }}>
                Tidak
            </option>

        </select>

    </div>

    <button
        type="submit"
        class="btn btn-primary">

        Update

    </button>

    <a href="/snack"
       class="btn btn-secondary">

       Kembali

    </a>

</form>

@endsection
