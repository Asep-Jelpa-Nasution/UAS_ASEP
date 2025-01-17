<?php
require "includes/config.php";

// Ambil ID dari query string
$id = $_GET['id'];

// Query untuk ambil data dari database
$query = "SELECT * FROM tbl_minuman WHERE id_minuman=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);

// Jika data tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("Data tidak ditemukan...");
}

// Proses Update
if (isset($_POST['update'])) {
    $id2 = $_POST['id'];
    $nama_minuman = $_POST['nama_minuman'];
    $daerah_minuman = $_POST['daerah_minuman'];

    // Query update data
    $query2 = "UPDATE tbl_minuman SET nama_minuman='$nama_minuman', daerah_minuman='$daerah_minuman' WHERE id_minuman='$id2'";
    $sql2 = mysqli_query($conn, $query2);

    // Feedback proses update
    if ($sql2) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='?page=minuman';</script>";
    } else {
        echo "<script>alert('Gagal update data!'); window.location='?page=minuman';</script>";
    }
}
?>

<style>
    .form-container {
        font-family: Arial, sans-serif;
        width: 50%;
        margin: 2em auto;
        padding: 2em;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }

    .form-container h2 {
        text-align: center;
        color: #333;
        margin-bottom: 1.5em;
    }

    .form-group {
        margin-bottom: 1em;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5em;
        font-weight: bold;
    }

    .form-group input[type="text"] {
        width: 100%;
        padding: 0.8em;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .form-group input[type="submit"] {
        padding: 0.8em 1.5em;
        border: none;
        border-radius: 4px;
        color: #fff;
        background-color: #007BFF;
        cursor: pointer;
        font-size: 1em;
    }

    .form-group input[type="submit"]:hover {
        background-color: #0056b3;
    }

    .form-group .btn-cancel {
        background-color: #6c757d;
    }

    .form-group .btn-cancel:hover {
        background-color: #5a6268;
    }
</style>

<div class="form-container">
    <h2>Update Data Minuman</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?= $data['id_minuman'] ?>">

        <div class="form-group">
            <label for="nama_minuman">Nama Minuman</label>
            <input type="text" id="nama_minuman" name="nama_minuman" value="<?= $data['nama_minuman'] ?>">
        </div>

        <div class="form-group">
            <label for="daerah_minuman">Daerah Minuman</label>
            <input type="text" id="daerah_minuman" name="daerah_minuman" value="<?= $data['daerah_minuman'] ?>">
        </div>

        <div class="form-group">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="cancel" value="Cancel" class="btn-cancel">
        </div>
    </form>
</div>