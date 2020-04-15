<?php
session_start();

if (!$_SESSION["is_login"] === TRUE) {
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <header>

    </header>
    <main>
        <form action="" method="POST">
            <label>Name</label>
            <input type="text" name="name" value="Enter your name">
            <label>Alamat</label>
            <input type="text" name="location" value="Enter your location">
            <button type="submit" name="save">Simpan</button>
        </form>
    </main>
    <footer>

    </footer>
</body>

</html>