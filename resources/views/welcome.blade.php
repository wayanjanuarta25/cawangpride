<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVENTECH</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero-section {
            padding: 100px 0;
            background: #f8f9fa;
            text-align: center;
        }
        .features-section {
            padding: 50px 0;
        }
        .footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1 class="fw-bold">Sistem Inventory Barang</h1>
            <p class="lead">Kelola stok barang dengan mudah dan efisien. Pantau keluar-masuk barang secara real-time.</p>
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg">Daftar</a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container features-section text-center">
        <h2 class="mb-4">Fitur Utama</h2>
        <div class="row">
            <div class="col-md-4">
                <i class="fas fa-boxes fa-3x text-primary"></i>
                <h5 class="mt-3">Manajemen Stok</h5>
                <p>Mengelola stok barang dengan pencatatan yang sistematis.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-truck-loading fa-3x text-success"></i>
                <h5 class="mt-3">Barang Masuk & Keluar</h5>
                <p>Pantau pergerakan barang masuk dan keluar dengan akurat.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-chart-line fa-3x text-warning"></i>
                <h5 class="mt-3">Laporan & Analitik</h5>
                <p>Dapatkan laporan stok barang dalam bentuk grafik dan tabel.</p>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/about.png') }}" alt="About" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold">Tentang Sistem</h2>
                <p>Sistem ini dirancang untuk membantu perusahaan atau organisasi dalam mengelola persediaan barang dengan efisien. Dengan fitur pencatatan stok, barang masuk & keluar, serta laporan yang lengkap, sistem ini akan mempermudah pekerjaan Anda.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p class="mb-0">&copy; 2025 Sistem Inventory Barang | Dibuat dengan ❤️ oleh PK SUS SIDEM</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
