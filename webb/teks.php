
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="teks.css">
    <title>UAS Pemrograman Web</title>
</head>
<body>
    <div class="container">
        <div class="box">
        <span></span>
            <div class="content">
    <header>
    <nav class="navbar">
    <div class="logo">
        <div class="buttons">
            <a>PEMROGRAMAN WEB</a>
            <a href="https://www.unsrat.ac.id/">UNSRAT</a>
            <a href="https://fatek.unsrat.ac.id/informatika/">INFORMATIKA</a>
          </div>
        </nav>
    </header>
    <h1>Nama: STELI ESTER PALEMBATAS<br>NIM: 19021106965<h1></h1>
        <h1>Penjelasan function.php</h1>
        
        <p><img src="functions.PNG" alt="" style="float: left;">Pada functions.php berisikan berbagai function yang kemudian akan terhubung ke page login dan juga register. Terdapat $conn, dimana berisikan function untuk mengkoneksikan ke database.
            Selanjutnya pada line 3 terdapat function registrasi yang menerima inputan data yang dikirim dari $_POST. Kemudian mengkoneksikan ke database, mengambil data dari $_POST kemudian dimasukkan ke $username.  Kemudian membuat $password dan $password2. Pada line 12 terdapat cek konfirmasi password, jadi ketika user mengisikan password dengan konfirmasi passwordnya salah maka akan muncul alert.
            Pada line 24 terdapat enkripsi password dengan menggunakan function password_hash yang mengacak sebuah string menggunakan algoritma enkripsi tertentu.
            
        </p>
        <h1>Penjelasan login.php</h1>
        <img src="login1.PNG" alt="">
        <img src="login2.PNG" alt="">
        <img src="login3.PNG" alt="">
        <p>Lalu, ada login.php, pada login.php dibuat page login setelah user telah mendaftarkan diri di page registrasi. 
            Terdapat if isset($_POST)["login"] untuk mengecek apakah tombol login sudah ditekan atau belum.
            Lalu mengecek username apakah sudah ada username sesuai dengan yang diinputkan dengan memasukkan ke dalam $result.
            Kemudian menggunakan function mysqli_num_rows() untuk menghitung ada berapa baris yang dikembalikan dari fungsi "SELECT" 
            ,jika ada maka nilainya 1 tapi jika tidak ada maka nilainya 0.
            Selanjutnya cek passwordnya, dengan cara mengambil password dari dalam database berdasarkan user yang diinputkan,
            didalam $row ada isi data yaitu id, username dan password yang sudah diacak.
            Passwod_verify() yaitu fungsi untuk mengecek sebuah string apakah sama dengan hashnya.
            Jika tidak ada username maka akan masuk ke $error = true;, tapi jika ada username maka dia akan masuk dulu 
            ke pengecekan password. Jika passwordnya salah maka dia akan ke $error = true;. Kalau ada error maka akan muncul username/password salah.
            Pada login, kita menyalakan session agar session bisa berjalan. Kemudian terdapat $_COOKIE untuk mengecek cookie. 
            Lalu, terdapat $result untuk mengambil username berdasarkan id. Pada page login kita menerapkan login.php sebagai tampilan yang muncul, sehingga ketika kita mencoba membuka halaman music atau index.php, 
            maka otomatis user akan disuruh untuk login terlebih dahulu.
        </p>
        <h1>Penjelasan logout.php</h1>
        <img src="logout.PNG" alt="">
        <p>Kemudian, terdapat logout.php untuk logout, dengan menggunakan session_destroy() maka kita akan dialihkan kembali ke halaam login. 
            Pada logout.php juga dinyalakan session_start(). Dan juga terdapat set cookie untuk pengaturan penghapusan cookie.
        </p>


    </div>
</body>
</html>