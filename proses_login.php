<?php

include "koneksi.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli, ($_POST['password']));

    $query = "SELECT * FROM datalogin WHERE username= '$username' AND password = '$password'";
    $queryDB = mysqli_query($mysqli, $query);
    $check = mysqli_num_rows($queryDB);

    if ($check > 0) {
        $getData = mysqli_fetch_array($queryDB);

        $_SESSION['name'] = $getData;
        $_SESSION['is_login']  = true;

        header("location:menuUtama.php");
    } else {
        echo '<script>alert("Username / password salah!")</script>';
        echo '<script>window.location="index.php"</script>';
    }
} else {
    return "Anda tidak di ijinkan";
}
