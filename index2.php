<?php
require "includes/config.php";
?>
<link rel="stylesheet" href="assets/css/style.css">
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kuliner</title>
</head>

<body>
    <header>
        <h1 style="text-align: center;">Daftar Kuliner Tradisional</h1>
        <hr>
    </header>
    <div style="text-align: center;">
        <?php require "includes/navbar.php" ?>
        <hr>
    </div>
    <div align="center">
        <?php require "includes/konten.php" ?>
    </div>
    <footer style="margin-top: 3em; text-align: center;">
        <hr>
        <p>&copy; Created By <span class="fw-bold">Asep Jelpa Nasution</span></p>
    </footer>
</body>

</html>