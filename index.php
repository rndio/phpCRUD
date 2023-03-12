<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= title ?> - Dashboard</title>
    <?php require 'header.php' ?>
    <script>
        $(document).ready(function () {
            // Render Table on First Time
            $("#main").load("ajax/mhs_search.php?")
            // Cari Mahasiswa oninput
            $('#searchMhs').on('input', debounce(function() {
                $("#main").load(`ajax/mhs_search.php?q=${this.value}&p=1`)
            }, 500));
        });
    </script>
    <?php  if (isset($_POST['nrp']))  : ?>
        <?php  if (tambah($_POST) > 0) : ?>
            <?php unset($_POST) ?>
            <script>$(function () {$_AWN.success("Data Berhasil Ditambahkan")})</script>
        <?php else :  ?>
            <?php unset($_POST) ?>
            <script> $(function () {$_AWN.alert("Data Gagal Ditambahkan")})</script>
        <?php endif; ?>
    <?php endif; ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><?=title?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=".">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addMhsModal">Tambah Mahasiswa</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="text-decoration-none" href="logout.php"><i class="ri-logout-box-line"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="my-4">
            <input id="searchMhs" class="form-control" type="text" placeholder="Cari Mahasiswa..." autocomplete="off" autofocus>
        </div>
        <div id="main">
        </div>
    </div>

    <div class="modal fade" id="addMhsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="." method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nrp" class="form-label">NRP :</label>
                            <input name="nrp" id="nrp" type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama :</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email :</label>
                            <input type="text" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="jurusan" class="form-label">Jurusan :</label>
                            <input type="text" name="jurusan" id="jurusan" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar :</label>
                            <input type="file" name='gambar' class="form-control" id="gambar">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit" name="submit">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>