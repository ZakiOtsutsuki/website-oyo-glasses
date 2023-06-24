<?php
include 'src/php_config/config.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['total-harga'] = $_POST['totalharga'];

    $sql = "SELECT * from pemesanan";
    $result = mysqli_query($conn, $sql);
    $rowcount = mysqli_num_rows( $result );
    $id_pemesanan = $rowcount + 1;
   
    $sql = $sql = "SELECT now()";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $waktu_pemesanan = $row[0];
    
    $id_pelanggan = $_SESSION['id'];
    
    $sql = $sql = "SELECT id_produk FROM isi_keranjang WHERE id_pelanggan='" . $_SESSION['id'] . "';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $id_produk = $row[0];

    $sql = "INSERT INTO pemesanan (id_pemesanan, waktu_pemesanan, id_pelanggan, id_produk)
            VALUES ('$id_pemesanan', '$waktu_pemesanan', '$id_pelanggan', '$id_produk')";
    $result = mysqli_query($conn, $sql);
    header("Location: pembayaran.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
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
        <div class="content-pemesanan">
            <h3>Produk</h3>
            <table id="produk-pemesanan">
                <tr>
                    <td><img src="<?php echo $_SESSION['gambar']; ?>" alt="" id="gambar-produk-pemesanan"></td>
                    <?php $sql = $sql = "SELECT nama_produk FROM produk WHERE id_produk=(SELECT id_produk FROM isi_keranjang WHERE id_pelanggan='" . $_SESSION['id'] . "');";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);?>
                    <td><?php echo $row[0];?></td>
                    <?php $sql = $sql = "SELECT jumlah FROM isi_keranjang WHERE id_pelanggan='" . $_SESSION['id'] . "';";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);?>
                    <td><?php echo $row[0];?></td>
                    <?php $sql = $sql = "SELECT total_harga FROM isi_keranjang WHERE id_pelanggan='" . $_SESSION['id'] . "';";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);?>
                    <td>Rp. <?php echo $row[0]; ?></td>
                </tr>
            </table>
            <h3>Jasa Pengiriman</h3>
            <table>
                <tr>
                    <td><input type="radio" id="jne" name="jasa" checked></td>
                    <label for="jne">
                    <td><img src="src/img/jne.png" alt="" class="gambar-jasa"></td>
                    <td>JNE</td>
                    <td>Reguler</td>
                    <td>Rp. 20.000</td>
                    </label>
                </tr>
                <tr>
                    <td><input type="radio" id="j&t" name="jasa"></td>
                    <label for="j&t">
                    <td><img src="src/img/j&t.jpg" alt="" class="gambar-jasa"></td>
                    <td>J&T</td>
                    <td>Reguler</td>
                    <td>Rp. 20.000</td>
                    </label>
                </tr>
                <tr>
                    <td><input type="radio" id="sicepat" name="jasa"></td>
                    <label for="sicepat">
                    <td><img src="src/img/sicepat.png" alt="" class="gambar-jasa"></td>
                    <td>Sicepat</td>
                    <td>Reguler</td>
                    <td>Rp. 20.000</td>
                    </label>
                </tr>
            </table>
            <p id="pemesanan-total-harga">Total Harga :</p><p id="rupiah">Rp. </p><p id="total-harga"></p>
            <script>
                let harga = <?php echo $row[0]; ?>;
                let totalharga = harga + 20000;
                document.getElementById('total-harga').textContent = totalharga;
            </script>
            <form id="formbayar" method="POST">
                <input type="hidden" name="totalharga" id="harga-total">
                <input type="button" value="Bayar" onclick="submitbayar()" class="tombol-bayar">
            </form>
            <script>
            function submitbayar() {
            // Set the value of a hidden input field in the form
            document.getElementById("harga-total").value = totalharga;
            // Submit the form
            document.getElementById("formbayar").submit();
            }
            </script>
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