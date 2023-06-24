<?php
include 'src/php_config/config.php';
session_start();
$sql = "SELECT COUNT(*) FROM pembayaran WHERE id_pemesanan=(SELECT id_pemesanan FROM pemesanan WHERE id_pelanggan='" . $_SESSION['id'] . "')";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$isi_pesanan = $row[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
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
        <div class="content-pesanan">
        <?php if ($isi_pesanan != 0): ?>
            <h1>Pesanan</h1>
            <table>
                <tr>
                    <td colspan="2">Produk</td>
                    <td>Total Harga</td>
                    <td>Status Pesanan</td>
                </tr>
                <tr>
                    <td><img src="<?php echo $_SESSION['gambar'] ;?>" alt=""></td>
                    <td><?php $sql = $sql = "SELECT nama_produk FROM produk WHERE id_produk=(SELECT id_produk FROM isi_keranjang WHERE id_pelanggan='" . $_SESSION['id'] . "');";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);?>
                    <p><?php echo $row[0];?></p></td>
                    <td>Rp. <?php echo $_SESSION['total-harga'] ;?></td>
                    <td>Menunggu Konfirmasi admin</td>
                </tr>
            </table>
        <?php else: ?>
            <h1>Pesanan</h1>
            <div>
                <p style="text-align: center;">Belum ada pesanan</p>
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