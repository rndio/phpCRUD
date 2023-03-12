<?php 
require '../function.php';

echo json_encode(query("SELECT * FROM mahasiswa LIMIT 10"));
