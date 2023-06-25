<?php
include '../src/php_config/config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['gambar'] = 'src/img/ilustro-032-50-1.png';
    // Retrieve the JavaScript variable value from the form submission
    $jsVariable = $_POST['jsVariable'];
    $jumlah = intval($jsVariable);
    $id_produk = 106;
    $id_pelanggan = $_SESSION['id'];
    $harga = 418000;
    $total_harga = $jumlah * $harga;

    $sql = "INSERT INTO isi_keranjang (id_pelanggan, id_produk, jumlah, total_harga)
            VALUES ('$id_pelanggan', '$id_produk', '$jumlah', '$total_harga')";
    $result = mysqli_query($conn, $sql);
    header("Location: ../keranjang.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <title>Oyo Glasses</title>
    <link rel="stylesheet" href="../src/css/style.css"> 
</head>
<body>
    <!-- Header Start -->
    <header class="header">
        <!-- Logo Section Start -->
        <div class="logo-container">
            <div>
                <img src="../src/img/icon-kacamata.png" alt="icon kacamata" class="icon-kacamata">
            </div>
            <div class="title-container">
                <p>Oyo Glasses</p>
                <p>Butuh kocomoto? Di Oyo aja dong</p>
            </div>
            <div class="icon-keranjang">
                <img src="../src/img/icon-keranjang.png" alt="keranjang">
                <a href="../keranjang.php">
                    <span class="span-link"></span>
                </a>
            </div>
            <div class="icon-akun">
                <img src="../src/img/icon-akun.png" alt="akun">
                <a href="../akun.php">
                    <span class="span-link"></span>
                </a>
            </div>
        </div>
        <!-- Logo Section End -->
        
        <!-- Navbar Section Start -->
        <div>
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../katalog.php">Katalog</a></li>
                    <li><a href="../pesanan.php">Pesanan</a></li>
                    <li><a href="../tentangkami.php">Tentang Kami</a></li>
                </ul>
            </nav>
        </div>
        <!-- Navbar Section End -->
    </header>
    <!-- Header End -->

    <!-- Content Produk Start -->
    <div class="detail-produk-container">
        <div class="detail-produk-gambar">
            <div class="image-container">
                <img id="expandedImg" style="width:100%">
            </div>
            <div class="image-row">
                <div class="image-column">
                  <img src="../src/img/ilustro-032-50-1.png" alt="kacamata" onclick="showImage(this.src);" id="gambar-default">
                </div>
                <div class="image-column">
                  <img src="../src/img/ilustro-032-50-2.png" alt="kacamata" onclick="showImage(this.src);">
                </div>
                <div class="image-column">
                  <img src="../src/img/ilustro-032-50-3.png" alt="kacamata" onclick="showImage(this.src);">
                </div>
                <div class="image-column">
                  <img src="../src/img/ilustro-032-50-4.png" alt="kacamata" onclick="showImage(this.src);">
                </div>
              </div>
        </div>
        <div class="detail-produk-deskripsi">
            <h1>Ilustro 032 50</h1>
            <p id="harga">Harga</p>
            <p id="harga-produk">Rp. 418.000</p>
            <p id="jumlah">Jumlah</p>
            <button id="decrementBtn" onclick="decrementCount();">-</button>
            <?php ob_start(); ?>
            <div class="counter" id="counter">1</div>
            <?php $count = ob_get_contents(); ?>
            <button id="incrementBtn" onclick="incrementCount();">+</button>
            <?php if (isset($_SESSION['id'])): ?>
                <form id="myForm" method="POST">
                    <input type="hidden" name="jsVariable" id="jsVariableInput">
                    <input type="button" value="Beli Sekarang" onclick="submitbeli()" class="tombol-beli">
                    <!-- <input type="button" value="Masukan Keranjang" onclick="submitbeli()" class="tombol-keranjang"> -->
                </form>
            <?php else: ?>
                <button class="tombol-beli" onclick="logindulu()">Beli Sekarang</button>
                <!-- <button class="tombol-keranjang" onclick="logindulu()">Masukan Keranjang</button> -->
            <?php endif; ?>
        </div>
    </div>
    <!-- Content Produk End -->

    <div class="footer">
        <p>copyright</p>
    </div>
    <script src="../src/js/script.js"></script>
</body>
</html>