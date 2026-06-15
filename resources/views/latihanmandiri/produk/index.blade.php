@extends('template')
@section('title', 'SIProduk')
@section('konten')

<h2>SIProduk</h2>


<table class="table table-striped table-hover">

    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Kategori Stok</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    @forelse($data as $item)

        @php
            $kategoristok = $item->stok <= 5 ? 'Hampir Habis' : 'Tersedia';
            $status = $item->aktif == true && $item->stok > 0 ? 'Aktif' : 'Nonaktif';

        @endphp

        <tr>

            <td>{{ $item->nama_produk }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->stok }}</td>
            <td>{{ $kategoristok }}</td>
            <td>{{ $status }}</td>
            <td>
                @if($  status == 'Aktif')

                    <form
                        action="/produk/ambil/{{ $item->id }}"
                        method="POST">

                        @csrf

                        <button
                            type="submit"
                            class="btn btn-success btn-sm">

                            Ambil

                        </button>

                    </form>
                    @else
                    <form
                        action="/produk/tambah/{{ $item->id }}"
                        method="POST">

                        @csrf

                        <button
                            type="submit"
                            class="btn btn-success btn-sm">

                            Tambah

                        </button>

                    </form>

                @endif

            </td>

        </tr>

    @endforeach

</table>

@endsection
