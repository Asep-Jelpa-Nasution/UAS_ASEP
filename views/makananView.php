<?php require "assets/datatables/style.html"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Makanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 30px;
        }

        .table-container {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            text-decoration: none;
            color: white;
            background-color: #6c757d;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .btn-custom:hover {
            background-color: #5a6268;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-4">Data Makanan</h2>
        <div class="table-container">
            <a href="?page=makananAdd" class="btn btn-primary mb-3">[+] Tambah Data Baru</a>
            <table id="example" class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Makanan</th>
                        <th>Daerah Makanan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "includes/config.php";
                    $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
                    $sql = mysqli_query($conn, $query);
                    $nomor = 1;
                    while ($data = mysqli_fetch_array($sql)) { ?>
                        <tr>
                            <td class="text-center"><?= $nomor++; ?></td>
                            <td><?= $data["nama_makanan"]; ?></td>
                            <td><?= $data["daerah_makanan"]; ?></td>
                            <td class="text-center">
                                <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <p class="mt-3"><strong>Total: <?= mysqli_num_rows($sql); ?></strong></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>