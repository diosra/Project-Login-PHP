<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'userdatalogin') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $nama = $_POST['name'];
    $npm = $_POST['npm'];
    $hobi = $_POST['hobi'];
    $location = $_POST['location'];

    $mysqli->query("INSERT INTO data_mhs (nama, npm, hobi, alamat) VALUES ('$nama', '$npm','$hobi', '$location')") or die($mysqli->error);

    $_SESSION['message'] = "Data berhasil ditambahkan!";
    $_SESSION['msg_type'] = "success";

    header("location: menuUtama.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data_mhs WHERE id=$id") or die(mysqli_error($mysqli));

    $_SESSION['message'] = "Data berhasil dihapus!";
    $_SESSION['msg_type'] = "danger";

    header("location: menuUtama.php");
}
