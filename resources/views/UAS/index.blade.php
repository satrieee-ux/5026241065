@extends('template')
@section('title', 'Kode Soal tagihan_air')
@section('konten')

<h2>Kode Soal tagihan_air</h2>

<a href="/eas/create" class="btn btn-primary mb-3">
    + Input Tagihan Baru
</a>

<table class="table table-striped table-hover">

    <tr>
        <th>ID</th>
        <th>No Meteran</th>
        <th>Penggunaan (m³)</th>
        <th>Total Tagihan</th>
    </tr>

    @forelse($data as $item)

        @php
            $penggunaan = $item->MeterAkhir - $item->MeterAwal;
            $totaltagihan = $penggunaan * 5000;
        @endphp

        <tr>

            <td>{{ $item->ID }}</td>
            <td>{{ $item->NoMeteran }}</td>
            <td>{{ $penggunaan }}</td>
            <td>
                Rp {{ number_format($totaltagihan,0,',','.') }}
            </td>

        </tr>

    @empty

        <tr>
            <td colspan="6">
                Belum ada data.
            </td>
        </tr>

    @endforelse

</table>

@endsection



