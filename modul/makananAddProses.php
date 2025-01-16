<?php
require "includes/config.php";
// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['submit'])) {
    $input_nama_makanan = inputData($_POST['nama_makanan']);
    $input_daerah_makanan = inputData($_POST['daerah_makanan']);
    $nama_makanan = mysqli_real_escape_string($conn, $input_nama_makanan);
    $daerah_makanan = mysqli_real_escape_string($conn, $input_daerah_makanan);
    // validasi field nama makanan
    if (empty($nama_makanan) || strlen($nama_makanan) == 0) {
        echo "<script>window.alert('Field is required');window.location='?page=makananAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($nama_makanan))) {
        echo "<script>window.alert('Only letters and white spaceallowed');window.location='?page=makananAdd'</script>";
        // validasi field nama makanan
    } elseif (empty($daerah_makanan) || strlen(($daerah_makanan)) == 0) {
        echo "<script>window.alert('Field is required');window.location='?page=makananAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", inputData($daerah_makanan))) {
        echo "<script>window.alert('Only letters and white space allowed');window.location='?page=makananAdd'</script>";
    } else {
        // validasi duplikasi data
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT nama_makanan from tbl_makanan where nama_makanan='$nama_makanan'"));
        if ($cek > 0) {
            echo "<script>window.alert('Data sudah tersedia');window.location='?page=makananAdd'</script>";
        } else {
            // buat query
            $query = "INSERT INTO tbl_makanan (nama_makanan, daerah_makanan) VALUES ('$nama_makanan', '$daerah_makanan')";
            $sql = mysqli_query($conn, $query);
            // apakah proses simpan berhasil?
            if ($sql) {
                echo "<script>window.alert('Data berhasil ditambah!'); window.location='?page=makanan';</script>";
            } else {
                echo "<script>window.alert('Gagal menambah data!'); window.location='?page=makanan';</script>";
            }
        }
    }
}
