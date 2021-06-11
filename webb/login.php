<?php
session_start();
require 'functions.php';

//cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    //ambil username berdasarkan id
    $result = mysqli_query($conn,"SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    //cek cookie dan username
    if( $key === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true;
    }

}
if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}


if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

    //cek username
    if( mysqli_num_rows($result) === 1 ) {
        
        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            //set session
            $_SESSION["login"] = true;

            // cek remember me
            if( isset($_POST['remember']) ) {
                //buat cookie

                setcookie('id', $row['id'], time()+3600);
                setcookie('key', hash('sha256', $row['username']), time()+3600);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="script.css">
    <title>Halaman Login</title>
</head>
<body>


<div class="box">
<form action="" method="post">
<h1>Login</h1>
    <label for="username"></label>
    <input type="text" name="username" id="username" placeholder="username">
    <label for="password"></label>
    <input type="password" name="password" id="password" placeholder="password">
    <input type="checkbox" name="remember" id="remember">
    <label style="color: #682359;" for="remember">Remember me</label>
    <button type="submit" name="login">Login</button>
    <a href="registrasi.php">Register</a><br>
    <a href="teks.php">ABOUT</a>
    <?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic;">username / password salah</p>
<?php endif; ?>
</form>
</div>
</body>
</html>
