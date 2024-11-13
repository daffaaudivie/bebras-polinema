<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebras Indonesia Challenge 2024</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo dan Judul -->
                <div class="col-md-6 d-flex align-items-center">
                    <img src="<?= base_url('assets/images/polinema.png'); ?>" alt="Logo Polinema" class="logo-polinema me-2">
                    <div class="header-text">
                        <h4 class="header-title">Biro Politeknik Negeri Malang</h4>
                        <h2 class="header-title">Tantangan Bebras (Bebras Challenge) Indonesia 2024</h2>
                    </div>
                </div>
                
                <!-- Navigation Menu -->
                <div class="col-md-6">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid justify-content-end">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                                <ul class="navbar-nav align-items-center">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('pendaftaran'); ?>">Pendaftaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('about'); ?>">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <img src="<?= base_url('assets/images/bebras-indonesia.png'); ?>" alt="Logo Bebras Indonesia" class="logo-bebras me-2">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    