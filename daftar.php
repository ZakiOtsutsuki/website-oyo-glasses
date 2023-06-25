<?php 
include 'src/php_config/config.php';
session_start();

$sql = "SELECT * from pelanggan";
$result = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows( $result );

if (isset($_SESSION['id'])) {
    header("Location: index.php");
}
 
if (isset($_POST['daftar'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phone-number'];
    $address = $_POST['address'];
    $dateofbirth = $_POST['date-of-birth'];
    $password = md5($_POST['password']);
    $id = $rowcount + 1;

    $sql = "SELECT * FROM pelanggan WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, alamat, no_hp, email, tgl_lahir, password)
                VALUES ('$id', '$name', '$address', '$phonenumber', '$email', '$dateofbirth', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Selamat, registrasi berhasil!')</script>";
            $name = "";
            $email = "";
            $phonenumber = "";
            $address = "";
            $dateofbirth = "";
            $_POST['password'] = "";
            $id = "";
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    } else {
        echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <div class="daftar-main">
        <h1>Daftar</h1>
        <div class="daftar-form">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><label for="name">Nama</label></td>
                        <td><input type="text" id="name" name="name"></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td><input type="email" id="email" name="email"></td>
                    </tr>
                    <tr>
                        <td><label for="phone-number">Nomor HP</label></td>
                        <td><input type="text" pattern="[0-9]+" id="phone-number" name="phone-number"></td>
                    </tr>
                    <tr>
                        <td><label for="address">Alamat</label></td>
                        <td><input type="text" id="address" name="address"></td>
                    </tr>
                    <tr>
                        <td><label for="date-of-birth">Tanggal Lahir</label></td>
                        <td><input type="date" id="date-of-birth" name="date-of-birth"></td>
                    </tr>
                    <tr>
                        <td><label for="password" >Password</label></td>
                        <td><input type="password" id="password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Daftar" id="tombol-daftar" name="daftar"></td>
                    </tr>
                </table>
            </form>
        </div>
        <a href="login.php">Sudah punya akun?</a>
        <a href="index.php">Kembali ke halaman awal</a>
    </div>
</body>
</html>