<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'userdatalogin') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$nama = '';
$npm = '';
$hobi = '';
$location = '';

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

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM data_mhs WHERE id=$id") or die($mysqli->error);
    if ($result->num_rows) {
        $row = $result->fetch_array();
        $nama = $row['nama'];
        $npm = $row['npm'];
        $hobi = $row['hobi'];
        $location = $row['alamat'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $npm = $_POST['npm'];
    $hobi = $_POST['hobi'];
    $alamat = $_POST['location'];

    $mysqli->query("UPDATE data_mhs SET nama='$nama', npm='$npm', hobi='$hobi', alamat='$alamat' WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Data berhasil di update!";
    $_SESSION['msg_type'] = "warning";

    header("location: menuUtama.php");
}
