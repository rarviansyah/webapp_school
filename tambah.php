<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">

<body>
    <div class="container col-md-6 mt-4">
        <h1 class="text-center">Tabel Siswa</h1>
        <div class="card">
            <div class="card-header bg info text-white">
                Tambah 
            </div>
            <div class="card-body">
                <form action="" method="post" role="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" class="form-control"  name="gambar">
                    </div>  
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nis</label>
                        <input type="text" name="nis" required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <input type="text" name="kelas" required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nilai">Nilai</label>
                        <input type="text" name="nilai" require="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="nilai">Jurusan</label>
                        <input type="text" name="jurusan" require="" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info" name="submit" value="simpan">Simpan Data</button>
                </form>

                <?php
          include('koneksi.php');

          if(isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $nis = $_POST['nis'];
            $kelas = $_POST['kelas'];
            $nilai = $_POST['nilai'];
            $jurusan = $_POST['jurusan'];

            $gambarName = $_FILES['gambar']['name'];
            $gambarTmpName = $_FILES['gambar']['tmp_name'];
            $gambarLocation = 'assets/gambar/' . $gambarName;
            move_uploaded_file($gambarTmpName, $gambarLocation);

            $query = "INSERT INTO siswa (gambar, nama, nis, kelas, nilai, jurusan) VALUES ('$gambarName', '$nama', '$nis', '$kelas', '$nilai', '$jurusan')";
            $result = mysqli_query($koneksi, $query);
            echo "<script>alert('data berhasil disimpan');window.location='index.php';</script>";
          }
        ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/bootstrap.min.js"></script>
</body>

</html>