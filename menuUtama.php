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
    <h1>ANJINGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG</h1>
</body>

</html>