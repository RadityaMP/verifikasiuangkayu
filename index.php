<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar Pringgodani - Pembayaran Uang Kayu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary: #4E6C50;
            --secondary: #395144;
            --accent: #F0EBCE;
            --light: #F8F5E4;
            --wood: #8B5A2B;
            --dark-wood: #6E3B10;
        }
        
        body {
            background-color: var(--light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            scroll-behavior: smooth;
        }
        
        .navbar {
            background-color: var(--primary) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--accent) !important;
            font-size: 1.5rem;
        }
        
        .hero-section {
    background: linear-gradient(rgba(78, 108, 80, 0.9), rgba(57, 81, 68, 0.9)), 
                url('/UANG_KAYU_VERIFIKASI/assets/images/6.jpeg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 120px 0;
    border-radius: 0 0 30px 30px;
    margin-bottom: 50px;
}
        
        .wood-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            overflow: hidden;
            border: none;
            height: 100%;
        }
        
        .wood-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .wood-badge {
            background-color: var(--wood);
            color: white;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 50px;
            font-size: 0.9rem;
        }
        
        .btn-wood {
            background-color: var(--wood);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn-wood:hover {
            background-color: var(--dark-wood);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .wood-icon {
            font-size: 2.5rem;
            color: var(--wood);
            margin-bottom: 15px;
        }
        
        .market-feature {
            background-color: var(--accent);
            border-radius: 15px;
            padding: 30px;
            height: 100%;
            transition: all 0.3s;
        }
        
        .market-feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .payment-steps {
            position: relative;
            padding-left: 30px;
        }
        
        .payment-steps::before {
            content: "";
            position: absolute;
            left: 10px;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(to bottom, var(--wood), var(--dark-wood));
        }
        
        .step {
            position: relative;
            margin-bottom: 30px;
            padding: 20px;
            background-color: rgba(240, 235, 206, 0.3);
            border-radius: 10px;
        }
        
        .step-number {
            position: absolute;
            left: -35px;
            top: 20px;
            width: 30px;
            height: 30px;
            background: linear-gradient(135deg, var(--wood), var(--dark-wood));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }
        
        .testimonial-card {
            background-color: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .testimonial-img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--accent);
        }
        
        .carousel-indicators button {
            background-color: var(--wood);
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin: 0 5px;
        }
        
        .carousel-indicators .active {
            background-color: var(--dark-wood);
        }
        
        .history-section {
            background-color: rgba(240, 235, 206, 0.5);
            border-radius: 15px;
            padding: 30px;
        }
        
        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            height: 400px;
        }
        
        .gallery-img {
            border-radius: 10px;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .gallery-img:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        footer {
            background: linear-gradient(135deg, var(--secondary), var(--primary));
        }
        
        .social-icon {
            font-size: 1.5rem;
            transition: all 0.3s;
        }
        
        .social-icon:hover {
            transform: translateY(-5px);
            color: var(--accent) !important;
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0;
            }
            
            .step {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-shop me-2"></i>Pasar Pringgodani
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#history">Sejarah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how-it-works">Cara Kerja Sistem Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#location">Lokasi</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-wood btn-sm" href="../pages/login.php">
                            <i class="bi bi-person me-1"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Pembayaran dengan Uang Kayu</h1>
            <p class="lead mb-5">Nikmati pengalaman berbelanja unik dengan mata uang tradisional khas Pasar Pringgodani</p>
            <div>
                <a href="../pages/logout.php" class="btn btn-wood me-3">
                    <i class="bi bi-currency-exchange me-2"></i>Cek Keaslian Uang Kayu Disini!!
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container my-5">
        <!-- About Wood Money -->
<section class="row align-items-center mb-5" id="history">
    <div class="col-lg-6 mb-4 mb-lg-0">
        <span class="wood-badge mb-3 d-inline-block">Sejarah Unik</span>
        <h2 class="mb-4">Pasar Pringgodani</h2>
        <div class="history-section">
            <p class="lead">Destinasi wisata baru di Balikpapan Timur yang memadukan alam, budaya, dan kuliner tradisional.</p>
            <p>Pasar Tumpah Pringgodani hadir sebagai salah satu ikon wisata Kota Balikpapan yang berlokasi di Jalan Gunung Binjai, Kelurahan Teritip. Kawasan seluas 2 hektar ini tidak hanya menawarkan pengalaman berbelanja unik, tetapi juga menjadi ruang edukasi dengan koleksi 66 spesies tanaman yang bisa dimanfaatkan untuk penelitian.</p>
            <p>Meskipun taman dan kebun penelitian ini telah ada sejak 2006, kolaborasi dengan PT GSA baru dimulai pada September 2023, menghadirkan konsep pasar tradisional dengan nuansa alam yang khas. Nama "Pringgodani" sendiri terinspirasi dari cerita pewayangan Mahabharata, merujuk pada wilayah kekuasaan Gatotkaca yang penuh dengan nilai-nilai heroik.</p>
            <p>Keunikan Pasar Pringgodani:</p>
            <ul>
                <li>Konsep alam dan tradisional yang autentik</li>
                <li>Penjual menggunakan pakaian tradisional</li>
                <li>Menjajakan berbagai kuliner khas Nusantara</li>
                <li>Mendukung UMKM lokal khususnya dari Balikpapan Timur</li>
                <li>Lokasi strategis sebagai penyangga Ibu Kota Negara (IKN)</li>
            </ul>
            <p>Diresmikan pada 3 Februari 2024, pasar ini diharapkan menjadi destinasi unggulan yang mempromosikan kekayaan budaya sekaligus menjadi kebanggaan masyarakat Balikpapan.</p>
        </div>
    </div>
    <div class="col-lg-6">
        <div id="historyCarousel" class="carousel slide wood-card" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#historyCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#historyCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#historyCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="/UANG_KAYU_VERIFIKASI/assets/images/1.jpeg"
                         class="d-block w-100" alt="Pasar Pringgodani">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                        <p>Area Pasar Pringgodani yang asri</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="/UANG_KAYU_VERIFIKASI/assets/images/4.jpg"
                         class="d-block w-100" alt="Kuliner Tradisional">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                        <p>Beragam kuliner tradisional Nusantara</p>
                    </div>
                </div>
                <div class="carousel-item">
                <img src="/UANG_KAYU_VERIFIKASI/assets/images/5.jpg"
                         class="d-block w-100" alt="Pakaian Tradisional">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                        <p>Penjual dengan pakaian tradisional</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#historyCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#historyCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

        <!-- How It Works -->
        <section class="my-5 py-5" id="how-it-works">
            <div class="text-center mb-5">
                <span class="wood-badge mb-3 d-inline-block">Cara Kerja Sistem Pembayaran</span>
                <h2>Bagaimana Berbelanja dengan Uang Kayu?</h2>
                <p class="lead">Proses sederhana untuk pengalaman berbelanja yang autentik</p>
            </div>
            
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="payment-steps">
                        <div class="step">
                            <div class="step-number">1</div>
                            <h4>Penukaran Mata Uang</h4>
                            <p>Tukarkan uang konvensional Anda dengan uang kayu di pos penukaran resmi pasar. Nilai tukar 1:1 dengan jaminan penukaran kembali kapan saja.</p>
                        </div>
                        
                        <div class="step">
                            <div class="step-number">2</div>
                            <h4>Pembelian Produk</h4>
                            <p>Pilih produk dari pedagang yang menerima uang kayu (ditandai dengan logo khusus). Semua produk kerajinan lokal, hasil bumi, dan kuliner tradisional dapat dibeli dengan uang kayu. Tanyakan kepada pedagang untuk informasi pecahan yang dibutuhkan.</p>
                        </div>
                        
                        <div class="step">
                            <div class="step-number">3</div>
                            <h4>Verifikasi Keaslian</h4>
                            <p>Setiap transaksi diverifikasi oleh petugas pasar menggunakan scanner khusus yang membaca kode unik pada uang kayu. Proses ini hanya membutuhkan waktu 10-15 detik per lembar.</p>
                        </div>
                        
                        <div class="step">
                            <div class="step-number">4</div>
                            <h4>Transaksi Selesai</h4>
                            <p>Anda bisa langsung menikmati produk yang dibeli.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Market Features -->
        <section class="my-5 py-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="market-feature text-center">
                        <i class="bi bi-tree-fill wood-icon"></i>
                        <h4>Ramah Lingkungan</h4>
                        <p>Uang kayu kami dibuat dari bahan alami dan dapat didaur ulang. Setiap produksi menggunakan kayu hasil budidaya khusus, bukan dari penebangan hutan alam.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="market-feature text-center">
                        <i class="bi bi-shield-check wood-icon"></i>
                        <h4>Keamanan Terjamin</h4>
                        <p>Dilengkapi dengan 5 lapis pengaman: kode unik, watermark alami kayu, cap khusus, serat kayu yang unik.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="market-feature text-center">
                        <i class="bi bi-people-fill wood-icon"></i>
                        <h4>Dukung Lokal</h4>
                        <p>100% dibuat oleh pengrajin lokal dari desa sekitar, guna menciptakan lapangan kerja dan melestarikan keterampilan tradisional.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Location Section -->
        <section class="my-5 py-5" id="location">
            <div class="text-center mb-5">
                <span class="wood-badge mb-3 d-inline-block">Lokasi</span>
                <h2>Kunjungi Pasar Pringgodani</h2>
                <p class="lead">Balikpapan Timur, Kalimantan Timur</p>
            </div>
            
            <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.290876454342!2d116.8651113147539!3d-1.283635799054006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMcKwMTcnMDEuMSJTIDExNsKwNTInMDEuOSJF!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
            ></iframe>
        </div>
    </div>
                <div class="col-lg-6">
                    <h4 class="mb-3">Jam Operasional</h4>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                            Senin - Jumat
                            <span class="wood-badge">08.00 - 17.00 WITA</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                            Sabtu - Minggu
                            <span class="wood-badge">07.00 - 18.00 WITA</span>
                        </li>
                    </ul>
                    
                    <h4 class="mb-3">Fasilitas</h4>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="wood-badge"><i class="bi bi-car-front-fill me-1"></i> Parkir Luas</span>
                        <span class="wood-badge"><i class="bi bi-cup-hot-fill me-1"></i> Area Kuliner</span>
                        <span class="wood-badge"><i class="bi bi-basket-fill me-1"></i> Toilet Bersih</span>
                        <span class="wood-badge"><i class="bi bi-info-circle-fill me-1"></i> Pusat Informasi</span>
                        <span class="wood-badge"><i class="bi bi-currency-exchange me-1"></i> Penukaran Uang</span>
                    </div>
                    
                    <a href="https://maps.app.goo.gl/ckLUukqeKEpbWbvw7" target="_blank" class="btn btn-success" style="background-color: #7bc043; border-color: #7bc043;">
    <i class="bi bi-geo-alt-fill me-2"></i>Petunjuk Arah Lokasi
</a>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h4 class="text-white"><i class="bi bi-shop me-2"></i> Pasar Pringgodani</h4>
                    <p class="mt-3 text-white-50">Melestarikan tradisi, memajukan ekonomi lokal melalui warisan budaya yang unik dan berkelanjutan.</p>
                </div>
                <div class="col-lg-2 col-6 mb-4 mb-lg-0">
                    <h5 class="text-white mb-3">Tautan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#home" class="text-white-50 text-decoration-none">Beranda</a></li>
                        <li class="mb-2"><a href="#history" class="text-white-50 text-decoration-none">Sejarah</a></li>
                        <li class="mb-2"><a href="#how-it-works" class="text-white-50 text-decoration-none">Cara Kerja</a></li>
                        <li><a href="#location" class="text-white-50 text-decoration-none">Lokasi</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 mb-4 mb-lg-0">
                    <h5 class="text-white mb-3">Kontak</h5>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-2"><i class="bi bi-geo-alt-fill me-2"></i> Jl. Gunung Binjai, Balikpapan Timur</li>
                        <li class="mb-2"><i class="bi bi-telephone-fill me-2"></i> +62 812-3456-7890</li>
                        <li class="mb-2"><i class="bi bi-envelope-fill me-2"></i> info@pasarpringgodani.id</li>
                        <li><i class="bi bi-clock-fill me-2"></i> Setiap hari 08.00-17.00 WITA</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5 class="text-white mb-3">Media Sosial</h5>
                    <div class="d-flex gap-3 mb-4">
                        <a href="#" class="text-white social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white social-icon"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-white social-icon"><i class="bi bi-youtube"></i></a>
                        <a href="#" class="text-white social-icon"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4 bg-white-10">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0 text-white-50">&copy; <?= date("Y") ?> Pasar Pringgodani. Seluruh hak cipta dilindungi.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white-50 text-decoration-none me-3">Kebijakan Privasi</a>
                    <a href="#" class="text-white-50 text-decoration-none">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Change navbar style on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow');
                navbar.style.padding = '10px 0';
            } else {
                navbar.classList.remove('shadow');
                navbar.style.padding = '15px 0';
            }
        });
    </script>
</body>
</html>