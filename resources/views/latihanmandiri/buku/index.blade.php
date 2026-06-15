@extends('template')
@section('title', 'SIPerpus')
@section('konten')

<h2>SIPerpus</h2>


<table class="table table-striped table-hover">

    <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Kategori</th>
        <th>Ketersediaan</th>
        <th>Pinjam</th>
    </tr>

    @forelse($data as $item)

        @php
            $kategori = date('Y') - $item->tahun < 5 ? 'Baru' : 'Lama';
            $ketersediaan = $item->sedang_dipinjam == true ? 'Dipinjam' : 'Tersedia';

        @endphp

        <tr>

            <td>{{ $item->judul }}</td>
            <td>{{ $item->penulis }}</td>
            <td>{{ $item->tahun }}</td>
            <td>{{ $kategori }}</td>
            <td>{{ $ketersediaan }}</td>
            <td>
                @if(!$item->sedang_dipinjam)

                    <form
                        action="/buku/pinjam/{{ $item->id }}"
                        method="POST">

                        @csrf

                        <button
                            type="submit"
                            class="btn btn-success btn-sm">

                            Pinjam

                        </button>

                    </form>

                @endif

            </td>

        </tr>

    @endforeach

</table>

@endsection
