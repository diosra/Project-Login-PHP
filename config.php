<?php
$koneksi = mysqli_connect("localhost:7777", "root", "", "userdatalogin");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
