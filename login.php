<?php
session_start();
require "function.php";

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];


    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username from user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}


if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // set session
            $_SESSION['login'] = true;

            // cek remember me
            if (isset($_POST['remember'])) {
                // buat cookie
                setcookie('id', $row['id'], time() + 60 * 60 * 24 * 1);
                setcookie('key', hash('sha256', $row['username']), time() + 60 * 60 * 24 * 1);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= title ?> - Login</title>
    <?php require 'header.php' ?>
    <style>body{background-color: #0093E9;background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%)}</style>
    <script>
        $(document).ready(function() {

        });
    </script>
</head>

<body class="min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card m-5" style="width:340px;">
            <img src="assets/img/logo.svg" class="my-4 rounded-circle align-self-center shadow" alt="Logo" width="100">
            <form action="" method="POST" class="card-body" style="padding:.5rem 1rem 1.5rem 1rem;">
                <p class="fw-semibold mb-3 text-center"><?= title; ?><br>Silahkan Login</p>
                <?php if (isset($error)) : ?><script>
                    $_AWN.alert('Username / Password salah')
                </script><?php endif; ?>
                <div class="mb-2">
                    <input type="text" name="username" placeholder="Username" class="form-control rounded-0" autofocus required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" placeholder="Password" id="password"
                        class="form-control rounded-0" required>
                </div>
                <div class="ms-1 my-3 form-check">
                    <input class="form-check-input rounded-0" name="remember" type="checkbox" id="chkbox">
                    <label class="form-check-label" for="chkbox">Remember Me</label>
                </div>
                <button class="btn btn-primary rounded-0 w-100 d-inline-flex justify-content-center" type="submit"><i
                        class="ri-login-box-line me-1"></i>Login / Masuk</button>
            </form>
        </div>
</body>

</html>