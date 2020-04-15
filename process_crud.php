<?php

$mysqli = new mysqli('localhost', 'root', '', 'userdatalogin') or die(mysqli_error($mysqli));

if (isset($_POST['save'])) {
    $nama = $_POST['name'];
    $npm = $_POST['npm'];
    $hobi = $_POST['hobi'];
    $location = $_POST['location'];


    $mysqli->query("INSERT INTO data_mhs (nama, npm, hobi, alamat) VALUES ('$nama', '$npm','$hobi', '$location')") or die($mysqli->error);
}
