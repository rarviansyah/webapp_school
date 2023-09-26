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
        <h1>Tabel Siswa</h1>
        <div class="card">
            <div class="card-header bg-info text-white">
                Edit Siswa
            </div>
            <div class="card-body">
                <?php 
        include('koneksi.php');

        $id = $_GET['id'];

        $data = mysqli_query($koneksi, "select * from siswa where id_siswa= '$id'");
        $row = mysqli_fetch_assoc($data);

        ?>
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <select name="nama" id="nama" class="form-control" required>
                            <option value="">Pilih satu</option>
                            <!-- <option value="Arvi">Arvi</option> -->
                            <option value="Taupik">Taupik</option>
                            <option value="Fadil">Fadil</option>
                            <option value="Awal">Awal</option>
                            <option value="Ajul">Ajul</option>
                            <option value="Bagas">Bagas</option>
                            <option value="Daffa">Daffa</option>
                            <option value="Dapi">Dapi</option>
                            <option value="Dama">Dama</option>
                            <option value="Ferdi">Ferdi</option>
                            <option value="Fadly">Fadly</option>
                            <option value="Gugun">Gugun</option>
                            <option value="Raihan">Raihan</option>
                            <option value="Raffi">Raffi</option>
                            <option value="Raden">Raden</option>
                            <option value="Paisal">Paisal</option>
                            <option value="Windah">Windah</option>
                            <?php 
                                foreach ($data as $row) { 
                                    $selected = ($row['nama'] == $row['nama']) ? 'selected' : '';
                            ?>
                                <option value="<?= $row['nama'] ?>" <?= $selected ?>><?= $row['nama'] ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="id" id="id" value="<?= $row['id_siswa'];?>" required>
                    </div>

                    <div class="form-group">
                        <label for="">Nis</label>
                        <input type="text" name="nis" class="form-control" value="<?= $row['nis'];?>">
                    </div>
                    <div class="form-group">
                        <label for="">Kelas</label>
                        <input type="text" name="kelas" class="form-control" value="<?= $row['kelas'];?>">
                    </div>
                    <div class="form-group">
                        <label for="">Nilai</label>
                        <input type="text" name="nilai" class="form-control" value="<?= $row['nilai'];?>">
                    </div>
                    <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" required>
                            <option value="">Pilih satu</option>
                            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                            <option value="Rekaya Perangkat Lunak">Rekaya Perangkat Lunak</option>
                            <option value="Bisnis Daring dan Pemasaran">Bisnis Daring dan Pemasaran</option>
                            <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Perhotelan">Perhotelan</option>
                            <option value="Tata Boga">Tata Boga</option>
                            <?php 
                                foreach ($data as $row) { 
                                    $selected = ($row['jurusan'] == $row['jurusan']) ? 'selected' : '';
                            ?>
                                <option value="<?= $row['jurusan'] ?>" <?= $selected ?>><?= $row['jurusan'] ?></option>
                            <?php } ?>
                        </select>
                        <input type="hidden" name="id" id="id" value="<?= $row['id_siswa'];?>" required>
                    </div>
                    <button type="submit" class="btn btn-info" name="submit" value="simpan">Update data</button>
                </form>

                <?php
        if(isset($_POST['submit'])){
          $id = $_POST['id'];
          $gambar = $_POST['gambar'];
          $nama = $_POST['nama'];
          $nis = $_POST['nis'];
          $kelas = $_POST['kelas'];
          $nilai = $_POST['nilai'];
          $jurusan = $_POST['jurusan'];

          mysqli_query($koneksi, "update siswa set gambar='$gambar',nama='$nama', nis='$nis', kelas='$kelas', nilai='$nilai', jurusan='$jurusan' where id_siswa='$id'") or die(mysqli_error($koneksi));

          echo "<script>alert('data berhasil diupdate');window.location='index.php';</script>";
        }
        ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/bootstrap.min.js"></script>
</body>

</html>