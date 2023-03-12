<?php
require '../function.php';

if (isset($_GET['q'])) {
    $keyword = $_GET['q'];
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' LIMIT 10";
    $mahasiswa = query($query);

    header("Content-Type: application/json");
    echo json_encode($mahasiswa);
}
