@extends('template')
@section('title', 'Data Snack')
@section('konten')

<h2>Data Snack</h2>

<a href="/snack/create" class="btn btn-primary mb-3">
    Tambah Snack
</a>

<table class="table table-striped table-hover">

    <tr>
        <th>Kode Snack</th>
        <th>Merk Snack</th>
        <th>Stock Snack</th>
        <th>Tersedia</th>
        <th>Action</th>
    </tr>

    @forelse($data as $item)

    <tr>

        <td>{{ $item->kodesnack }}</td>
        <td>{{ $item->merksnack }}</td>
        <td>{{ $item->stocksnack }}</td>

        <td>

            @if($item->tersedia == 'Y')
                Tersedia
            @else
                Tidak Tersedia
            @endif

        </td>

        <td>

            <a href="/snack/edit/{{ $item->kodesnack }}"
               class="btn btn-warning btn-sm">

                Edit

            </a>

            <form
                action="/snack/delete/{{ $item->kodesnack }}"
                method="POST"
                style="display:inline;">

                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="btn btn-danger btn-sm">

                    Hapus

                </button>

            </form>

        </td>

    </tr>

    @empty

    <tr>
        <td colspan="5">
            Belum ada data.
        </td>
    </tr>

    @endforelse

</table>

@endsection
