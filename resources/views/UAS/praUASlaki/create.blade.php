<h2>Tambah Pembelian</h2>

<form
action="/keranjang/store"
method="POST">

@csrf

<label>Kode Barang</label>
<br>

<input
type="text"
name="KodeBarang">

<br><br>

<label>Jumlah</label>
<br>

<input
type="text"
name="Jumlah">

<br><br>

<label>Harga</label>
<br>

<input
type="text"
name="Harga">

<br><br>

<button type="submit">
Simpan
</button>

</form>
