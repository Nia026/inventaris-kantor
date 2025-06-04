<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Sistem Inventaris Kantor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
      <a class="navbar-brand" href="/">Inventaris Kantor</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header Hero -->
  <header class="bg-dark py-5">
    <div class="container px-5 text-center text-white">
      <h1 class="display-4 fw-bolder">Selamat Datang di Sistem Inventaris Kantor</h1>
      <p class="lead mb-4">Aplikasi untuk mencatat dan melacak barang kantor.</p>
      <div class="d-flex justify-content-center gap-3">
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
        <a href="{{ route('register') }}" class="btn btn-success btn-lg">Register</a>
      </div>
    </div>
  </header>

  <!-- (Optional) Features / Pricing / Contact section dari template jika ingin digunakan -->
  <!-- Contoh Section: -->
  <section class="py-5 border-bottom" id="features">
    <div class="container px-5">
      <div class="row text-center">
        <div class="col-lg-4">
          <div class="feature bg-primary text-white rounded-3 mb-3"><i class="bi bi-clipboard-data"></i></div>
          <h4>Manajemen Barang</h4>
          <p>Cek dan pantau barang secara real-time.</p>
        </div>
        <div class="col-lg-4">
          <div class="feature bg-primary text-white rounded-3 mb-3"><i class="bi bi-tags"></i></div>
          <h4>Kategori Lengkap</h4>
          <p>Kelompokkan barang berdasarkan jenis dan kategori.</p>
        </div>
        <div class="col-lg-4">
          <div class="feature bg-primary text-white rounded-3 mb-3"><i class="bi bi-geo-alt"></i></div>
          <h4>Lokasi Tersimpan</h4>
          <p>Setiap barang tercatat di lokasi penyimpanan yang tepat.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-4 bg-dark text-white text-center">
    <div class="container">
      <p class="mb-0">© {{ date('Y') }} Sistem Inventaris Kantor. All rights reserved.</p>
    </div>
  </footer>

  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>