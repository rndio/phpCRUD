<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
  header('HTTP/1.0 403 Forbidden', TRUE, 403);
  die(header('location: /index.php'));
};

define('title', 'CRUD PHP');


$conn = mysqli_connect("localhost", "root", "", "php_crud", 3306);

function url()
{
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function uploadFoto($fileName)
{
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  // cek apakah tidak ada gambar yg diupload
  if ($error === 4) {
    return 'assets/img/default.jpg';
  }

  // cek apakah yg diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = array_reverse(explode('.', strtolower($namaFile)))[0];
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    return false;
  }

  // cek ukuran file - Limit : 1MB
  if ($ukuranFile > 1000000) {
    return false;
  }

  // lolos pengecekan, gambar siap diupload
  move_uploaded_file($tmpName, 'assets/img/' . $fileName . '.' . $ekstensiGambar);
  return 'assets/img/' . $fileName . '.' . $ekstensiGambar;
}


function tambah($data)
{
  global $conn;
  $nrp = htmlspecialchars($data['nrp']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);

  // upload gambar
  $gambar = uploadFoto($nrp);
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO mahasiswa VALUES (NULL,'$nrp','$nama','$email','$jurusan','$gambar')";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  $query = "DELETE FROM mahasiswa WHERE id = $id";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  global $conn;

  $id = $data['id'];
  $nrp = htmlspecialchars($data['nrp']);
  $nama = htmlspecialchars($data['nama']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambarLama = htmlspecialchars($data['gambarLama']);

  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = uploadFoto($nrp);
  }

  $query = "UPDATE mahasiswa SET
    nrp = '$nrp',
    nama = '$nama',
    email = '$email',
    jurusan = '$jurusan',
    gambar = '$gambar'
    WHERE id = $id";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $query = "SELECT * FROM mahasiswa WHERE
    nama LIKE '%$keyword%' OR
    nrp LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'";

  return query($query);
}

function register($data)
{
  global $conn;
  $username = strtolower(stripslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $password2 = mysqli_real_escape_string($conn, $data['password2']);

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>alert('username sudah terdaftar')</script>";
    return false;
  }

  // cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>alert('konfirmasi password tidak sesuai')</script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan userbaru ke database
  mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");
  return mysqli_affected_rows($conn);
}
