<!DOCTYPE html>
<html>

<head>
  <title>Inventaris Kantor</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="container text-center mt-5">
    <h1 class="display-4">Selamat Datang di Sistem Inventaris Kantor</h1>
    <p class="lead">Aplikasi untuk mencatat dan melacak barang kantor.</p>
    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    <a href="{{ route('register') }}" class="btn btn-success">Register</a>
  </div>
</body>

</html>