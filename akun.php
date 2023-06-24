<?php
include 'src/php_config/config.php';
session_start();

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

    <!-- -->
    <div class="content-container">
        <div class="content">
            <div class="content-right">
                <img src="src/img/icon-akun.png" alt="foto akun">
            </div>
            <div class="content-left" id="akun-teks">
                <?php if (isset($_SESSION['id'])): ?>
                    <?php $sql = $sql = "SELECT * FROM pelanggan WHERE id_pelanggan='" . $_SESSION['id'] . "'";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();?>
                    <p>Nama : <?php echo $row["nama_pelanggan"];?></p>
                    <p>Tanggal Lahir : <?php echo $row["tgl_lahir"];?></p>
                    <p>Alamat : <?php echo $row["alamat"];?></p>
                    <p>Email : <?php echo $row["email"];?></p>
                    <p>Nomor HP : <?php echo $row["no_hp"];?></p>
                    <button class="tombol"><a href="src/php_config/logout.php">Logout</a></button>
                <?php else: ?>
                    <p>Kamu belum login</p>
                    <button class="tombol"><a href="login.php">Login</a></button>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- -->

    <!-- Footer Section Start -->
    <div class="footer">
        <p>copyright</p>
    </div>
    <!-- Footer Section End -->
</body>
</html>