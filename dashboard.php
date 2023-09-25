<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
      /* Gaya Navbar Samping */

      .sidebar {
        height: 100%;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #333;
        padding-top: 20px;
      }

      .sidebar a {
        padding: 15px 25px;
        text-align: center;
        text-decoration: none;
        font-size: 18px;
        color: white;
        display: block;
      }

      .sidebar a:hover {
        background-color: #444;
      }

      .sidebar h1 {
        text-align: center;
        font-size: 15;
        font-family: italic;
      }

      .asj h1,p{
        /* text-align:center; */
        font-size:35px;
        display: flex;
        justify-content: center;
      }

      .asd{
        text-align: center;
      }

      .container{
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .card {
        width: 800px; /* Lebar kotak */
        margin: 15px;
        display: inline-block; /* Membuat kotak berdampingan */
        text-align: center;
      }
      .card-body {
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center; /* Tautan di tengah secara horizontal */
        justify-content: center; /* Tautan di tengah secara vertikal */
        height: 100%; /* Membuat konten di dalam kotak penuh tinggi */
      }
      .card-title{
        display: flex;
        justify-content: center;
      }
      
    </style>
  </head>

  <body>
    <div class="sidebar">
    <h1 class="text-white">Aplikasi Sekolah</h1>
    <div class="asd" ><img src="wikrama-logo.png" alt="logo wk" width='100'></div class="justify-content-center"> 
      <br>
      <?php
        // Cek apakah pengguna sudah login
        // Gantilah kondisi berikut sesuai dengan cara Anda melakukan autentikasi
        $loggedIn = false; // Contoh: pengguna belum login

        if ($loggedIn) {
            // Jika pengguna sudah login, tampilkan tautan ke halaman Siswa, Nilai, dan Jurusan
            echo '<a href="index.php">Siswa</a>';
            echo '<a href="nilai.php">Nilai</a>';
            echo '<a href="jurusan.php">Jurusan</a>';
        } else {
            // Jika pengguna belum login, tampilkan tautan ke halaman Login
        }
        ?>
      <a href="index.php"><i class="bi bi-people"></i>Siswa</a>
      <a href="nilai.php">Nilai</a>
      <a href="jurusan.php">Jurusan</a>
      <br><br><br><br>
      <a href="index.html"><i class="bi bi-box-arrow-left"></i>keluar</a>
      <br><br><br>
      <div class="asd text-white"><i class="bi bi-c-circle text-white"></i>Arviansyah</div>
    </div>

    <div class="asj">
      <h1 class="text-dark">Selamat Datang Di Website SMK Wikrama Bogor</h1>
      <p>Tidak ada apa apa disini hehe..</p>
    </div>
        <hr>

    <div class="container">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Ingin tahu sejarah SMK Wikrama Bogor?</h5>
          <p class="card-text">Informasi tentang Wikrama di sini.</p>
          <a href="wk.html" class="btn btn-primary">Lihat</a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Ingin mengetahui Berapa Jumlah Siswa SMK Wikrama Bogor?</h5>
          <p class="card-text">Informasi tentang Siswa di sini.</p>
          <a href="wikrama.html" class="btn btn-primary">Lihat</a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Ingin mengetahui berapa jumlah jurusan SMK Wikrama Bogor?</h5>
          <p class="card-text">Informasi tentang jurusan di sini.</p>
          <a href="jrs.html" class="btn btn-primary">Lihat</a>
        </div>
      </div>
    </div>
  </body>
</html>
