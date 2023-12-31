<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../php_siswa/gambardashboard/logo.png">
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


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Tabel Siswa</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        Data Siswa
                        <a href="tambah.php" class="btn btn-sm btn-success ms-2">Tambah Siswa</a>
                    </div>
                    <div class="card-body bg-success-subtle text-emphasis-succes">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Gambar</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">NIS</th>
                                    <th class="text-center">Kelas</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Jurusan</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include('koneksi.php');
                                $datas = mysqli_query($koneksi, "SELECT siswa.id_siswa,siswa.nama,siswa.nis,siswa.kelas,nilai.nilai,jurusan.jurusan,siswa.gambar,siswa.nilai, siswa.jurusan FROM siswa LEFT JOIN nilai ON siswa.nilai_id=nilai.id LEFT JOIN jurusan ON siswa.jurusan_id=jurusan.id;") or die(mysqli_error($koneksi));
                                $no = 1;

                                while ($row = mysqli_fetch_array($datas)) {
                                    echo "<tr>";
                                    echo "<td class='text-center'>" . $no++ . "</td>";
                                    echo "<td class='text-center'><img src='assets/gambar/" . $row['gambar'] . "' alt='Gambar Siswa' width='50'></td>";
                                    echo "<td class='text-center'>" . $row['nama'] . "</td>";
                                    echo "<td class='text-center'>" . $row['nis'] . "</td>";
                                    echo "<td class='text-center'>" . $row['kelas'] . "</td>";
                                    echo "<td class='text-center'>" . $row['nilai'] . "</td>";
                                    echo "<td class='text-center'>" . $row['jurusan'] . "</td>";
                                    echo "<td class='text-center'>";
                                    echo "<a class='btn btn-sm btn-info' href='edit.php?id=" . $row['id_siswa'] . "'>Edit</a>";
                                    echo "<a class='btn btn-sm btn-danger' onclick=\"return confirm('Anda yakin ingin hapus?');\" href='hapus.php?id=" . $row['id_siswa'] . "'>Hapus</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
