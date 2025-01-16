<?php require "assets/datatables/style.html"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Minuman</title>
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
        <h2 class="text-center mb-4 ">Data Minuman</h2>
        <div class="table-container">
            <a href="?page=minumanAdd" class="btn btn-primary mb-3 float-start">[+] Tambah Data Baru</a>
            <table id="example" class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Minuman</th>
                        <th>Daerah Minuman</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "includes/config.php";
                    $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
                    $sql = mysqli_query($conn, $query);
                    $nomor = 1;
                    if (mysqli_num_rows($sql) == 0) {
                    ?>
                        <tr>
                            <td colspan="4" class="text-center"><i>No data</i></td>
                        </tr>
                        <?php
                    } else {
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td class="text-center"><?= $nomor++; ?></td>
                                <td><?= $data["nama_minuman"]; ?></td>
                                <td><?= $data["daerah_minuman"]; ?></td>
                                <td class="text-center">
                                    <a href="?page=minumanUpdate&id=<?= $data['id_minuman']; ?>" class="btn btn-success btn-sm">Edit</a>
                                    <a href="?page=minumanDelete&id=<?= $data['id_minuman']; ?>"
                                        onclick="return confirm('Yakin ingin menghapus data ini?');"
                                        class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
            <p class="d-flex justify-content-start mt-3"><strong>Total: <?= mysqli_num_rows($sql); ?></strong></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>