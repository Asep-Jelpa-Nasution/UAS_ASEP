<?php
require "includes/config.php";

// Ambil ID dari query string
$id = $_GET['id'];

// Query untuk ambil data dari database
$query = "SELECT * FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);

// Jika data tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("Data tidak ditemukan...");
}

// Proses Update
if (isset($_POST['update'])) {
    $id2 = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $daerah_makanan = $_POST['daerah_makanan'];

    // Query update data
    $query2 = "UPDATE tbl_makanan SET nama_makanan='$nama_makanan', daerah_makanan='$daerah_makanan' WHERE id_makanan='$id2'";
    $sql2 = mysqli_query($conn, $query2);

    // Feedback proses update
    if ($sql2) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='?page=makanan';</script>";
    } else {
        echo "<script>alert('Gagal update data!'); window.location='?page=makanan';</script>";
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
    <h2>Update Data Makanan</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?= $data['id_makanan'] ?>">

        <div class="form-group">
            <label for="nama_makanan">Nama Makanan</label>
            <input type="text" id="nama_makanan" name="nama_makanan" value="<?= $data['nama_makanan'] ?>">
        </div>

        <div class="form-group">
            <label for="daerah_makanan">Daerah Makanan</label>
            <input type="text" id="daerah_makanan" name="daerah_makanan" value="<?= $data['daerah_makanan'] ?>">
        </div>

        <div class="form-group">
            <input type="submit" name="update" value="Update">
            <input type="submit" name="cancel" value="Cancel" class="btn-cancel">
        </div>
    </form>
</div>