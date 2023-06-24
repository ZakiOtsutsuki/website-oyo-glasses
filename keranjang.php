<?php
include 'src/php_config/config.php';
session_start();
$isi_keranjang = 0;
$sql = "SELECT COUNT(*) FROM isi_keranjang WHERE id_pelanggan='" . $_SESSION['id'] . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$isi_keranjang = $row[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
    <!--  -->
    <div class="content-container">
        <div class="content">
        <?php if ($isi_keranjang==0): ?>
            <div class="content-right">
                <img src="src/img/icon-keranjang.png" alt="icon keranjang">
            </div>
            <div class="content-left" id="keranjang-teks">
                <p>Wah, keranjang belanjamu masih kosong</p>
                <button class="tombol"><a href="katalog.php">Lihat Katalog</a></button>
            </div>
         <?php else: ?>
            <div class="content-right">
                <img src="<?php echo $_SESSION['gambar']; ?>" alt="">
            </div>
            <div class="content-left">
                <h1 id='heading-keranjang'>Isi Keranjang</h1>
                <?php $sql = $sql = "SELECT nama_produk FROM produk WHERE id_produk=(SELECT id_produk FROM isi_keranjang WHERE id_pelanggan='" . $_SESSION['id'] . "');";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);?>
                <p id="nama-produk-keranjang">Nama : <?php echo $row[0];?></p>
                <?php $sql = $sql = "SELECT jumlah FROM isi_keranjang WHERE id_pelanggan='" . $_SESSION['id'] . "';";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);?>
                <p>Jumlah : <?php echo $row[0];?></p>
                <?php $sql = $sql = "SELECT total_harga FROM isi_keranjang WHERE id_pelanggan='" . $_SESSION['id'] . "';";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);?>
                <p>Total Harga : <?php echo $row[0];?></p>
                <button class="tombol"><a href="pemesanan.php">Beli</a></button>
            </div>
        <?php endif; ?>
        </div>    
    </div>
    <!--  -->
    
    <!-- Footer Section Start -->
    <div class="footer">
        <p>copyright</p>
    </div>
    <!-- Footer Section End -->
</body>
</html>