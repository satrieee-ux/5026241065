<!DOCTYPE html>
<html lang="en">
<head>
  <title>5026241065 Muhammad Satrio Adjie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<div class="mt-4 p-5 bg-primary text-white rounded">
  <h3>5026241065 Muhammad Satrio Adjie</h3>
  <h6>@yield('title')</h6>
</div>
<!-- Grey with black text -->
<div>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="pegawai">Pegawai</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="snack">Snack (PraEAS)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="siswa">Siswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="keranjang">KeranjangBelanja</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nilaikuliah">NilaiKuliah</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="eas">EAS</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<div class="container">
  @yield('konten')
</div>

<!-- Black background with white text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">...</nav>

<!-- Blue background with white text -->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">...</nav>
</div>

</body>
</html>
