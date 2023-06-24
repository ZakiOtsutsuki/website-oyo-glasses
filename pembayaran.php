<?php
include 'src/php_config/config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $sql = "SELECT * from pembayaran";
    $result = mysqli_query($conn, $sql);
    $rowcount = mysqli_num_rows( $result );
    $no_pembayaran = $rowcount + 1;
    

    $sql = $sql = "SELECT now()";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $waktu_pembayaran = $row[0];
    

    $sql = $sql = "SELECT id_pemesanan FROM pemesanan WHERE id_pelanggan='" . $_SESSION['id'] . "';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $id_pemesanan = $row[0];
    
    $sql = "INSERT INTO pembayaran (no_pembayaran, waktu_pembayaran, id_pemesanan)
            VALUES ('$no_pembayaran', '$waktu_pembayaran', '$id_pemesanan')";
    $result = mysqli_query($conn, $sql);
    header("Location: pesanan.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
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
        <div class="content-pembayaran">
            <h1>Pembayaran</h1>
            <p>Rekening pembayaran : xxxx-xx-xxxxxx-xx-x</p>
            <p>Nominal pembayaran &nbsp: Rp. <?php echo $_SESSION['total-harga']; ?></p>
            <form method="POST">
                <input type="submit" value="Konfirmasi Pembayaran" class="tombol-konfirmasi">
            </form>
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