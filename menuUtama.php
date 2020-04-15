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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <header>

    </header>
    <main>
        <?php require_once 'process_crud.php'; ?>
        <div class="row justify-content-center">
            <form action="process_crud.php" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="Enter your name">
                </div>
                <div class="form-group">
                    <label>NPM</label>
                    <input type="text" name="npm" class="form-control" value="Enter your npm">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="location" class="form-control" value="Enter your location">
                </div>
                <div class="form-group">
                    <label>Hobi</label>
                    <input type="text" name="hobi" class="form-control" value="Enter your hobi">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="save">Simpan</button>
                </div>
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>