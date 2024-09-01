<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>App Center</title>
    <!-- Custom fonts for this template-->
    <link href="sb/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="sb/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="app_icon_v2.png" type="image/x-icon">
    <!-- Bootstrap 5.3 (CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUa3C7+3dIk6cdssLlOX5NfINwB4kmt5X9p5Ffvy2p8++/I/5BjqwCdxz4Tw" crossorigin="anonymous">
    <style> 

        .carousel-item img {
            width: 100%; /* Full width */
            height: 500px; /* Fixed height */
            object-fit: cover; /* Ensure image adjusts without distortion */
            object-position: center; /* Center image */
            transition: filter 0.5s ease; /* Smooth transition */
            border-radius: 20px;
        }

        .carousel-caption {
            position: absolute;
            bottom: 10px;
            left: 10px;
            right: 10px;
            display: none;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 10px;
            backdrop-filter: blur(5px);
            transition: opacity 0.4s ease, visibility 0.4s ease;
        }

        .carousel-caption h5 {
            padding-right: 100%;
        }

        .carousel-item:hover .carousel-caption {
            display: block;
            opacity: 1;
            visibility: visible;
        }

        .carousel-item:hover img {
            filter: brightness(50%);
        }

        .btn-zoom {
            position: absolute;
            bottom: 10px;
            right: 10px;
            transition: transform 0.4s ease, opacity 0.4s ease;
            transform: scale(0.9);
            opacity: 0;
            visibility: hidden;
        }

        .carousel-item:hover .btn-zoom {
            transform: scale(1);
            opacity: 1;
            visibility: visible;
        }

        .btn-zoom:active {
            transform: scale(2);
        }

        h5 {
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            opacity: 0;
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out; /* Smooth transition */
            transform: translateY(-20px);
        }

        .carousel-item:hover h5 {
            opacity: 1;
            transform: translateY(0); /* Slide down and fade in */
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            padding-top: 35px;
        }

        .app-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            margin-bottom: 20px;
            margin-top: 50px;
            gap: 40px;
        }

        .app-card {
            width: 300px;
            height: auto;
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .app-card:hover {
            transform: translateY(-10px);
        }

        .app-card img {
            width: 300px;
            height: auto;
            display: block;
        }

        .app-info {
            position: absolute;
            bottom: 0; /* Posisi awal di bawah */
            left: 0;
            width: 300px;
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 0 0 20px 20px;
            transition: all 0.5s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            opacity: 0;
            transform: translateY(100%); /* Awalnya tersembunyi di luar viewport */
        }

        .app-card:hover .app-info {
            transform: translateY(0); /* Slide ke atas */
            opacity: 1;
        }

        .app-info p {
            margin-bottom: 40px;
            font-size: 14px;
            line-height: 1.5;
        }

        .app-info .app-icon {
            position: absolute;
            bottom: 20px;
            left: 20px;
            width: 30px;
            height: 30px;
            border-radius: 10px;
        }

        .app-info .app-button {
            position: absolute;
            bottom: 20px;
            right: 20px;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.5s ease;
        }

        .app-card:hover .app-info .app-button {
            transform: translateY(0);
            opacity: 1;
        }
    </style>  
</head>

<body class="bg-dark">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: rgb(41, 41, 41);">
        <a class="navbar-brand text-white" href="#"><img src="app_icon_v2.png" alt="icon" style="width: 25px; height: auto;"> App Center</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#billboard">Billboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#application">Aplikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="app_center_about.php">Tentang</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Billboard Application -->
    <div id="billboard" class="col-md-11 ml-5 pl-4 text-white pt-5">
        <h1>Billboard Application</h1>
        <!-- Image Slider -->
        <div id="carouselExample" class="carousel slide mt-4 mb-5" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="netflix.jpg" class="d-block w-100" alt="netflix">
                    <div class="carousel-caption">
                        <h5>Netflix</h5>
                        <a href="https://www.netflix.com/" target="_blank" class="btn btn-danger btn-zoom">Unduh Netflix</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="discord_v4.png" class="d-block w-100" alt="discord">
                    <div class="carousel-caption">
                        <h5>Discord</h5>
                        <a href="https://discord.com/" target="_blank" class="btn btn-info btn-zoom">Unduh Discord</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="wattpad_v1.png" class="d-block w-100" alt="wattpad">
                    <div class="carousel-caption">
                        <h5>Wattpad</h5>
                        <a href="https://www.wattpad.com/" target="_blank" class="btn btn-warning btn-zoom">Unduh Wattpad</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="spotify_v1.png" class="d-block w-100" alt="spotify">
                    <div class="carousel-caption">
                        <h5>Spotify</h5>
                        <a href="https://www.spotify.com/" target="_blank" class="btn btn-success btn-zoom">Unduh Spotify</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- About -->
    <div id="application" class="col-md-11 ml-5 pl-4 text-white pt-5">
        <h1>Aplikasi</h1>
        <!-- about app -->
        <div class="app-grid mb-5">
            <!-- Netflix Card -->
            <div class="app-card">
                <img src="netflix_icon.jfif" alt="Netflix">
                <div class="app-info border-left-danger">
                    <p>Netflix adalah layanan aliran video sesuai permintaan berbasis langganan yang berasal dari Amerika Serikat. 
                        Layanan ini menawarkan beragam film dan acara televisi, termasuk produksi orisinal dan yang diperoleh dari pihak lain, 
                        yang mencakup berbagai genre dan tersedia dalam banyak bahasa secara internasional.</p>
                    <img src="netflix_icon.jfif" alt="Netflix Icon" class="app-icon">
                    <a href="https://www.netflix.com/" target="_blank" class="btn btn-danger app-button">Unduh
                        Netflix</a>
                </div>
            </div>
            <!-- Discord Card -->
            <div class="app-card">
                <img src="discord_icon_v2.jfif" alt="Discord">
                <div class="app-info border-left-info">
                    <p>Discord adalah aplikasi gratis yang berfungsi untuk berkomunikasi melalui pesan teks, panggilan suara, dan panggilan video. 
                        Aplikasi ini populer di kalangan gamers, namun juga digunakan untuk berbagai keperluan lainnya, 
                        seperti: Komunitas belajar mengajar untuk mengatur kelas online, Pertemuan tim, Diskusi proyek, Koordinasi pekerjaan.</p>
                    <img src="discord_icon_v2.jfif" alt="Discord Icon" class="app-icon">
                    <a href="https://discord.com/" target="_blank" class="btn btn-info app-button">Unduh
                        Discord</a>
                </div>
            </div>
            <!-- Wattpad Card -->
            <div class="app-card">
                <img src="wattpad_icon.jfif" alt="Wattpad">
                <div class="app-info border-left-warning">
                    <p>Wattpad adalah platform daring yang memungkinkan pengguna untuk menulis dan membaca cerita. 
                        Wattpad merupakan aplikasi gratis yang bisa diakses oleh siapa saja, baik pemula maupun yang sudah profesional.</p>
                    <img src="wattpad_icon.jfif" alt="Wattpad Icon" class="app-icon">
                    <a href="https://www.wattpad.com/" target="_blank" class="btn btn-warning app-button">Unduh
                        Wattpad</a>
                </div>
            </div>
            <!-- Spotify Card -->
            <div class="app-card">
                <img src="spotify_icon.jfif" alt="Spotify">
                <div class="app-info border-left-success">
                    <p>Spotify adalah layanan musik digital, podcast, 
                        dan video yang memberimu akses ke jutaan lagu dan konten lain dari kreator di seluruh dunia.
                        Spotify tersedia di berbagai perangkat, termasuk komputer, ponsel, tablet, speaker, TV, serta mobil, 
                        dan kamu bisa dengan mudah beralih dari satu perangkat ke perangkat lainnya dengan Spotify Connect.</p>
                    <img src="spotify_icon.jfif" alt="Spotify Icon" class="app-icon">
                    <a href="https://www.spotify.com/" target="_blank" class="btn btn-success app-button">Unduh
                        Spotify</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="sticky-footer" style="background-color: rgb(41, 41, 41);">
        <div class="container my-auto">
            <div class="copyright text-center my-auto text-white">
                <span>Copyright &copy; App - Center. by Bisma</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->
    <!-- Bootstrap core JavaScript-->
    <script src="sb/vendor/jquery/jquery.min.js"></script>
    <script src="sb/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap 5.3 (JS with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-QF1y24rG9/gQKfOcLP1On5KUsR7KQn/0txo48yFPsLuGey5CrOoEEmS6Gh8t2ewt" crossorigin="anonymous"></script>
</body>

</html>
