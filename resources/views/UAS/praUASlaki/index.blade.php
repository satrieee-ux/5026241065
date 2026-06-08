@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

<h2>Keranjang Belanja</h2>

<a href="/keranjang/create" class="btn btn-primary mb-3">
    + New Item
</a>

<table class="table table-striped table-hover">

    <tr>
        <th>Kode Pembelian</th>
        <th>Kode Barang</th>
        <th>Jumlah Pembelian</th>
        <th>Harga Per Item</th>
        <th>Total</th>
        <th>Action</th>
    </tr>

    @forelse($data as $item)

        @php
            $total = $item->Jumlah * $item->Harga;
        @endphp

        <tr>

            <td>{{ $item->id }}</td>

            <td>{{ $item->KodeBarang }}</td>

            <td>{{ $item->Jumlah }}</td>

            <td>
                Rp {{ number_format($item->Harga,0,',','.') }}
            </td>

            <td>
                Rp {{ number_format($total,0,',','.') }}
            </td>

            <td>

                <form
                    action="/keranjang/beli/{{ $item->id }}"
                    method="POST"
                    style="display:inline;">

                    @csrf

                    <button
                        type="submit"
                        class="btn btn-success btn-sm">

                        Beli

                    </button>

                </form>

                <form
                    action="/keranjang/delete/{{ $item->id }}"
                    method="POST"
                    style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        class="btn btn-danger btn-sm">

                        Batal

                    </button>

                </form>

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
