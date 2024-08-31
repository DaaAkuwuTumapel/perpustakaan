<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital Sekolah</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Link ke Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }
        header {
            background-color: #003d7a; /* Warna yang sama dengan footer */
            color: white;
            width: 100%; /* Full width */
            padding: 20px 15px; /* Padding untuk konten */
            box-sizing: border-box; /* Memastikan padding tidak menambah lebar */
        }
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            max-width: 50px; /* Atur ukuran maksimum sesuai kebutuhan */
            height: auto;    /* Memastikan proporsi tetap */
            margin-top: -5px; /* Geser logo sedikit ke atas */
        }
        .navbar-brand h1 {
            font-size: 24px; /* Ukuran teks dapat disesuaikan */
            margin-left: 10px; /* Spasi antara logo dan teks */
        }
        .navbar-nav a {
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar-nav a:hover {
            background-color: #0056b3;
        }
        .search-box {
            margin-top: 20%; /* Menurunkan posisi pencarian */
        }
        .search-box h2 {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 20px;
            margin-left: 3%;
        }
        .input-group {
            max-width: 250px; /* Mengatur lebar maksimum */
            margin: 5%; /* Menjaga input terpusat */
        }
        .input-group input[type="text"] {
            border-radius: 4px 0 0 4px;
        }
        .input-group .btn {
            border-radius: 0 4px 4px 0;
        }
        .book-item {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .book-item:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .book-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        footer {
            background-color: #003d7a; /* Warna yang sama dengan header */
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="img/unair.png" alt="Logo Sekolah">
                    <h1>Perpustakaan Digital Sekolah</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Katalog Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Petunjuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-success" href="login.html">Masuk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="search-box">
                    <h2>Buku Untuk Semua</h2>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari buku...">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">Cari</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="img/assetperpus.png" alt="Asset Perpustakaan" class="img-fluid rounded">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="text-center">Buku Bahasa Inggris</h2> <!-- Menambahkan text-center untuk judul utama -->
        <div class="row">
            <div class="col-md-3 mb-4">
                <a href="#">
                    <div class="book-item text-center"> <!-- Menambahkan text-center untuk memusatkan teks -->
                        <img src="img/book-1.png" alt="Buku 1">
                        <p>Life Today</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="#">
                    <div class="book-item text-center"> <!-- Menambahkan text-center untuk memusatkan teks -->
                        <img src="img/book-2.png" alt="Buku 2">
                        <p>Train of Thoughts</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="#">
                    <div class="book-item text-center"> <!-- Menambahkan text-center untuk memusatkan teks -->
                        <img src="img/book-3.png" alt="Buku 3">
                        <p>English For Change</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mb-4">
                <a href="#">
                    <div class="book-item text-center"> <!-- Menambahkan text-center untuk memusatkan teks -->
                        <img src="img/book-4.png" alt="Buku 4">
                        <p>English Of Nusantara</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    

    <footer>
        <h2>Pusat Perbukuan</h2>
        <p>Badan Standar, Kurikulum, dan Asesmen Pendidikan</p>
        <p>Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi</p>
        <p>Contact: info@perpustakaandigital.sch.id</p>
    </footer>

    <!-- Link ke Bootstrap JS dan dependensinya (jQuery dan Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
