<?php
include 'src/php_config/config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['id'])) {
    header("Location: index.php");
}
 
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM pelanggan WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id_pelanggan'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <div class="login-main">
        <h1>Login</h1>
        <div class="login-form">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><label for="email" >Email</label></td>
                        <td><input type="email" id="email" name="email"></td>
                    </tr>
                    <tr>
                        <td><label for="password" >Password</label></td>
                        <td><input type="password" id="password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="login" id="tombol-login" name="login"></td>
                    </tr>
                </table>
            </form>
        </div>
        <a href="daftar.php">Belum punya akun?</a>
        <a href="index.php">Kembali ke halaman awal</a>
    </div>
</body>
</html>