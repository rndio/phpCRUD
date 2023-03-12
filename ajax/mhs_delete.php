<?php 
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: /login.php");
    exit;
}
require '../function.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die();
}

if ( hapus($id) > 0 ) {
    header("Content-Type: application/json");
    echo json_encode(array('id'=>$_GET['id'],'status'=>1,'msg'=>"Data Berhasil Dihapus"));
}else {
    header("Content-Type: application/json");
    echo json_encode(array('id'=>$_GET['id'],'status'=>0,'msg'=>"Data Gagal Dihapus"));
}
