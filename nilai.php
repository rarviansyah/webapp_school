<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Sekolah</title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" style="font-weight: bold; font-style: sans-serif;">Aplikasi Sekolah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="font-weight: bold; margin-right: 20px;">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nilai.php" style="font-weight: bold; margin-right: 20px;">Nilai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jurusan.php" style="font-weight: bold; margin-right: 20px;">Jurusan</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item btn btn-sm btn-danger opacity-85">
                    <a class="nav-link" href="dashboard.php" style="font-weight: bold;">Kembali Ke Dashboard</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container col-md-6 mt-4">
        <h1 class="text-center">Tabel Nilai Siswa</h1>
        <div class="card">
            <div class="card-header bg-dark text-white text-center">
                Data Nilai Siswa 
                <a href="tambah.php" class="btn btn-sm btn-success ms-2">Tambah Nilai</a>
            </div>
            <div class="siswa-body p-3 mb-2 bg-success-subtle text-emphasis-succes">
                <table class="table table-bordered">
                    <thead>
                        <th class="border border-dark text-center">id</th>
                        <th class="border border-dark text-center">Nilai</th>
                        <th class="border border-dark text-center">Aksi</th>
                    </thead>
                    <tbody>
                        <?php
              include('koneksi.php');
              $datas = mysqli_query($koneksi, "SELECT siswa.id_siswa,siswa.nama,siswa.nis,siswa.kelas,nilai.nilai,jurusan.jurusan,siswa.gambar,siswa.nilai,siswa.jurusan FROM siswa LEFT JOIN nilai ON siswa.nilai_id=nilai.id LEFT JOIN jurusan ON siswa.jurusan_id=jurusan.id;;
              ") or die(mysqli_error($koneksi));
              $id = 1;

              while($row = mysqli_fetch_array($datas)){
                echo "<tr>";

                echo "<td class='text-center'>".$id++."</td>";
                echo "<td class='text-center'>".$row['nilai']."</td>";

                echo "<td class='text-center'>";
                echo "<a class='btn btn-sm btn-info' href='edit.php?id=".$row['id_siswa']."'>Edit</a>";
                echo "<a class='btn btn-sm btn-danger' onclick='return confirm('anda yakin ingin hapus?');' href='hapus.php?id=".$row['id_siswa']."'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
              }
            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
</body>
</html>