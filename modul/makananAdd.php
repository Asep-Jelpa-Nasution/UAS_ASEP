<?php
// cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST['submit'])) {
    // ambil data dari formulir
    $nama_makanan = $_POST['nama_makanan'];
    $daerah_makanan = $_POST['daerah_makanan'];
    // buat query
    $query = "INSERT INTO tbl_makanan (nama_makanan, daerah_makanan) VALUE ('$nama_makanan', '$daerah_makanan')";
    $sql = mysqli_query($conn, $query);
    // apakah proses simpan berhasil?
    if ($sql) {
        echo "<script>window.alert('Data berhasil ditambah!');window.location='?page=makanan';</script>";
    } else {
        echo "<script>window.alert('Gagal menambah data!');window.location='?page=makanan';</script>";
    }
} elseif (isset($_POST['cancel'])) {
    echo "<script>window.location='?page=makanan';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            background: #fff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2 class="form-title">Tambah Data Daftar Makanan</h2>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="namaMakanan" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control" id="namaMakanan" name="nama_makanan" placeholder="Masukkan nama makanan" required>
                </div>
                <div class="mb-3">
                    <label for="daerahMakanan" class="form-label">Daerah Makanan</label>
                    <input type="text" class="form-control" id="daerahMakanan" name="daerah_makanan" placeholder="Masukkan daerah makanan" required>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                    <button type="reset" class="btn btn-warning me-2">Reset</button>
                    <button type="submit" name="cancel" class="btn btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>