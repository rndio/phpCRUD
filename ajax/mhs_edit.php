<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: /login.php");
    exit;
}

require '../function.php';

// ambil parameter id di URL
$id = $_GET['id'];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST['submit'])) {
    if (ubah($_POST) > 0) {
        echo "<script>alert('data berhasil diubah!');
        document.location.href='/index.php'
        </script>";
    } else {
        echo "<script>alert('data gagal diubah!');
        document.location.href='/index.php'
        </script>";
    }
}

?>
<div class="main">
    <form action="<?=$_SERVER['REQUEST_URI']?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs['gambar'] ?>">
        <div class="mb-3">
            <label for="nrp" class="form-label">NRP :</label>
            <input name="nrp" id="nrp" type="text" value="<?= $mhs['nrp'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama :</label>
            <input type="text" name="nama" id="nama" value="<?= $mhs['nama'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="text" name="email" id="email" value="<?= $mhs['email'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan'] ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar :</label>
            <img src="<?= $mhs['gambar'] ?>" alt="" width="40"> <br>
            <input type="file" class="form-control" id="gambar">
        </div>
        <button class="btn btn-outline-primary" type="submit" name="submit">Ubah Data</button>
    </form>
</div>