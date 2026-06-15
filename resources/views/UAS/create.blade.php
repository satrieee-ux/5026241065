<h2>Kode Soal tagihan_air</h2>

<form
action="/eas/store"
method="POST">

@csrf

<label>No Meteran</label>
<br>

<input
type="text"
name="NoMeteran">

<br><br>

<label>Meter Akhir</label>
<br>

<div class="form-group">
    <input
    type="text"
    name="MeterAkhir"
    class="form-control @error('MeterAkhir') is-invalid @enderror">

    @error('MeterAkhir')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<br><br>

<label>Meter Awal</label>
<br>

<div class="form-group">
    <input
    type="text"
    name="MeterAwal"
    class="form-control @error('MeterAwal') is-invalid @enderror">

    @error('MeterAwal')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<br><br>

<button type="submit">
Tambah +
</button>

</form>
