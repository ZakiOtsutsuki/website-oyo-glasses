<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
    <title>Oyo Glasses</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <!-- Header Start -->
    <header class="header">
        <!-- Logo Section Start -->
        <div class="logo-container">
            <div>
                <img src="src/img/icon-kacamata.png" alt="icon kacamata" class="icon-kacamata">
            </div>
            <div class="title-container">
                <p>Oyo Glasses</p>
                <p>Butuh kocomoto? Di Oyo aja dong</p>
            </div>
            <div class="icon-keranjang">
                <img src="src/img/icon-keranjang.png" alt="keranjang">
                <a href="keranjang.php">
                    <span class="span-link"></span>
                </a>
            </div>
            <div class="icon-akun">
                <img src="src/img/icon-akun.png" alt="akun">
                <a href="akun.php">
                    <span class="span-link"></span>
                </a>
            </div>
        </div>
        <!-- Logo Section End -->
        
        <!-- Navbar Section Start -->
        <div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="katalog.php">Katalog</a></li>
                    <li><a href="pesanan.php">Pesanan</a></li>
                    <li><a href="tentangkami.php">Tentang Kami</a></li>
                </ul>
            </nav>
        </div>
        <!-- Navbar Section End -->
    </header>
    <!-- Header End -->

    <!-- Katalog Section Start -->
    <div class="katalog">
        <!-- Kategori Section Start -->
        <div class="kategori">
            <form action="#">
                <h1>Cari berdasarkan bentuk frame</h1>
                <input type="radio" id="kategori-1" name="kategori-kacamata" onclick="filterSelection('kategori-1')" checked>
                <label for="kategori-1">frame kotak</label><br>
                <input type="radio" id="kategori-2" name="kategori-kacamata" onclick="filterSelection('kategori-2')">
                <label for="kategori-2">frame oval</label><br>
                <input type="radio" id="kategori-3" name="kategori-kacamata" onclick="filterSelection('kategori-3')">
                <label for="kategori-3">frame bulat</label><br>
            </form>
        </div>
        <!-- Kategori Section End -->

        <!-- Produk Section Start -->
        <div class="produk-container">
            <h1>Produk</h1>
            <div class="produk-konten">
                <!-- Kategori 1 start -->
                <div class="produk kategori-1">
                    <div class="produk-gambar">
                        <img src="src/img/helen-keller-c3w-53.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Helen Keller C3W 53</h1>
                        <p>Rp. 340.000</p>
                    </div>
                    <a href="produk/helen-keller-c3w-53.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-1">
                    <div class="produk-gambar">
                        <img src="src/img/helen-keller-c1b-53.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Helen Keller C1B 53</h1>
                        <p>Rp. 340.000</p>
                    </div>
                    <a href="produk/helen-keller-c1b-53.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-1">
                    <div class="produk-gambar">
                        <img src="src/img/ilustro-c7-55.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Ilustro C7 55</h1>
                        <p>Rp. 600.000</p>
                    </div>
                    <a href="produk/ilustro-c7-55.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-1">
                    <div class="produk-gambar">
                        <img src="src/img/ilustro-c1-55.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Ilustro C1 55</h1>
                        <p>Rp. 600.000</p>
                    </div>
                    <a href="produk/ilustro-c1-55.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-1">
                    <div class="produk-gambar">
                        <img src="src/img/ilustro-c6-55.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Ilustro C6 55</h1>
                        <p>Rp. 600.000</p>
                    </div>
                    <a href="produk/ilustro-c6-55.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-1">
                    <div class="produk-gambar">
                        <img src="src/img/ilustro-032-50.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Ilustro 032 50</h1>
                        <p>Rp. 418.000</p>
                    </div>
                    <a href="produk/ilustro-032-50.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <!-- Kategori 1 end -->

                <!-- Kategori 2 start -->
                <div class="produk kategori-2">
                    <div class="produk-gambar">
                        <img src="src/img/ilustro-c5-54.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Ilustro C5 54</h1>
                        <p>Rp. 600.000</p>
                    </div>
                    <a href="produk/ilustro-c5-54.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-2">
                    <div class="produk-gambar">
                        <img src="src/img/ilustro-c3-54.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Ilustro C3 54</h1>
                        <p>Rp. 600.000</p>
                    </div>
                    <a href="produk/ilustro-c3-54.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-2">
                    <div class="produk-gambar">
                        <img src="src/img/ilustro-c7-53.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Ilustro C7 53</h1>
                        <p>Rp. 510.000</p>
                    </div>
                    <a href="produk/ilustro-c7-53.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-2">
                    <div class="produk-gambar">
                        <img src="src/img/ilustro-c1-53.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Ilustro C1 53</h1>
                        <p>Rp. 600.000</p>
                    </div>
                    <a href="produk/ilustro-c1-53.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-2">
                    <div class="produk-gambar">
                        <img src="src/img/helen-keller-c4-52.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Helen Keller C4 52</h1>
                        <p>Rp. 340.000</p>
                    </div>
                    <a href="produk/helen-keller-c4-52.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-2">
                    <div class="produk-gambar">
                        <img src="src/img/helen-keller-c3w-52.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Helen Keller C3W 52</h1>
                        <p>Rp. 340.000</p>
                    </div>
                    <a href="produk/helen-keller-c3w-52.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <!-- Kategori 2 end -->

                <!-- Kategori 3 start -->
                <div class="produk kategori-3">
                    <div class="produk-gambar">
                        <img src="src/img/helen-keller-c19-51.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Helen Keller C1/9 51</h1>
                        <p>Rp. 400.000</p>
                    </div>
                    <a href="produk/helen-keller-c19-51.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-3">
                    <div class="produk-gambar">
                        <img src="src/img/helen-keller-c18-51.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Helen Keller C1/8 51</h1>
                        <p>Rp. 340.000</p>
                    </div>
                    <a href="produk/helen-keller-c18-51.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-3">
                    <div class="produk-gambar">
                        <img src="src/img/serenade-c5-52.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Serenade C5 52</h1>
                        <p>Rp. 400.000</p>
                    </div>
                    <a href="produk/serenade-c5-52.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-3">
                    <div class="produk-gambar">
                        <img src="src/img/serenade-c6-47.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Serenade C6 47</h1>
                        <p>Rp. 400.000</p>
                    </div>
                    <a href="produk/serenade-c6-47.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-3">
                    <div class="produk-gambar">
                        <img src="src/img/serenade-c3-47.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Serenade C3 47</h1>
                        <p>Rp. 340.000</p>
                    </div>
                    <a href="produk/serenade-c3-47.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <div class="produk kategori-3">
                    <div class="produk-gambar">
                        <img src="src/img/helen-keller-c1-52.png" alt="kacamata">
                    </div>
                    <div class="produk-deskripsi">
                        <h1>Helen Keller C1 52</h1>
                        <p>Rp. 400.000</p>
                    </div>
                    <a href="produk/helen-keller-c1-52.php">
                        <span class="span-link"></span>
                    </a>
                </div>
                <!-- Kategori 3 end -->
            </div>
        </div>
        <!-- Produk Section End -->
    </div>
    <!-- Katalog Section End -->

    <!-- Footer Section Start -->
    <div class="footer">
        <p>copyright</p>
    </div>
    <!-- Footer Section End -->
    <script src="src/js/script.js"></script> 
</body>
</html>