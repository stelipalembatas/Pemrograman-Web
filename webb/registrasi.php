<?php
require 'functions.php';
if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>
        alert('user baru berhasil ditambahkan');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="reg.css">
    <title>Halaman Registrasi</title>
</head>
<body>

<div class="box">
<form action="" method="post">
<h1>Registrasi<h1>
    <label for="username"></label>
    <input type="text" name="username" id="username" placeholder="username">
    <label for="password"></label>
    <input type="password" name="password" id="password" placeholder="password">
    <label for="password2"></label>
    <input type="password" name="password2" id="password2" placeholder="confirm your password">
    <button type="submit" name="register">REGISTER!</button>
    <a href="login.php">Login</a>

</form>

</body>
</html>