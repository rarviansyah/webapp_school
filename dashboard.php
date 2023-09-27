<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css" />
    <link rel="icon" type="image/png" href="../php_siswa/gambardashboard/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
      /* Gaya Navbar Samping */

      body {
      background-image: url('lapangaan.png'); 
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      font-family: Arial, sans-serif;
    }

      .sidebar {
        height: 100%;
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #0078d4;
        padding-top: 20px;
        align-items: center;
      }

      .sidebar a {
        padding: 15px 25px;
        text-align: center;
        text-decoration: none;
        font-size: 18px;
        color: white;
        display: block;
        align-items: center;
      }

      .sidebar a i{
        margin-right: 10px;
      }

      .sidebar a:hover {
        background-color: black;
      }

      .sidebar h1 {
        text-align: center;
        font-size: 15;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom: 20px; 
      }

      .asj h1, .asj h2{
        text-align: center;
        color: whitesmoke;
      }

      .asj{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-left: 250px;
        /* height: 100vh; */
      }

      .asd{
        text-align: center;
      }

      .container{
        display: flex;
        justify-content: right;
        align-items: center;
        flex-direction: column;
      }

      .card {
        width: 800px;
        margin: 15px;
        text-align: center;
      }
      .card-body {
        padding: 20px;
        /* justify-content: right; */
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
    <div class="asd" ><img src="../php_siswa/gambardashboard/wikrama-logo.png" alt="logo wk" width='100'></div class="justify-content-center"> 
      <a href="index.php"><i class="bi bi-people"></i>Siswa</a>
      <a href="nilai.php">Nilai</a>
      <a href="jurusan.php">Jurusan</a>
      <br>
      <a href="logout.html"><i class="bi bi-box-arrow-left"></i>keluar</a>
      <br>
      <div class="asd text-white">
        <a href="https:/wa.me/+6281210691045"><i class="bi bi-person-circle"></i>Kontak</a>
        <a href="https://www.instagram.com/wrarviansyahh/"><i class="bi bi-instagram"></i>Instagram</a>
      <br>
      <p class="text-white"><i class="bi bi-c-circle"></i>Arviansyahwr</p>
      </div>
    </div>

    <div class="asj">
      <h1>Selamat Datang Di Website SMK Wikrama Bogor</h1>
      <h2>Tidak ada apa apa disini hehe..</h2>
    </div>
    <div class="container">
      <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"> <i class="bi bi-hourglass-split"></i>Ingin tahu sejarah SMK Wikrama Bogor? </h5><hr>
          <p class="card-text">Informasi tentang Wikrama di sini.</p>
          <a href="sejarah.html" class="btn btn-primary">Lihat</a>
        </div>
      </div>
      </div>
    </div>

    <div class="container">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-people"></i>Ingin tahu Berapa Jumlah Siswa SMK Wikrama Bogor?</h5><hr>
          <p class="card-text">Informasi tentang Siswa di sini.</p>
          <a href="wikrama.html" class="btn btn-primary">Lihat</a>
        </div>
      </div>
      </div>
    </div>

    <div class="container">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-list-ol"></i>Ingin tahu berapa jumlah jurusan SMK Wikrama Bogor?</h5><hr>
          <p class="card-text">Informasi tentang jurusan di sini.</p>
          <a href="jrs.html" class="btn btn-primary">Lihat</a>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>
