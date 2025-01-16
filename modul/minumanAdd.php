<?php
// cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST['submit'])) {
    // ambil data dari formulir
    $nama_minuman = $_POST['nama_minuman'];
    $daerah_minuman = $_POST['daerah_minuman'];
    // buat query
    $query = "INSERT INTO tbl_minuman (nama_minuman, daerah_minuman) VALUE ('$nama_minuman', '$daerah_minuman')";
    $sql = mysqli_query($conn, $query);
    // apakah proses simpan berhasil?
    if ($sql) {
        echo "<script>window.alert('Data berhasil ditambah!');window.location='?page=minuman';</script>";
    } else {
        echo "<script>window.alert('Gagal menambah data!');window.location='?page=minuman';</script>";
    }
} elseif (isset($_POST['cancel'])) {
    echo "<script>window.location='?page=minuman';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Minuman</title>
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
            <h2 class="form-title">Tambah Data Daftar Minuman</h2>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="namaMinuman" class="form-label">Nama Minuman</label>
                    <input type="text" class="form-control" id="namaMinuman" name="nama_minuman" placeholder="Masukkan nama minuman" required>
                </div>
                <div class="mb-3">
                    <label for="daerahMinuman" class="form-label">Daerah Minuman</label>
                    <input type="text" class="form-control" id="daerahMinuman" name="daerah_minuman" placeholder="Masukkan daerah minuman" required>
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
