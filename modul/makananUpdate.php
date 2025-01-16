<?php
require "includes/config.php";
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan...");
}
// Skrip Proses Update
// cek apakah tombol update sudah diklik atau blum?
if (isset($_POST['update'])) {
    $id2 = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $daerah_makanan = $_POST['daerah_makanan'];
    // update data
    $query2 = "UPDATE tbl_makanan SET nama_makanan='$nama_makanan',daerah_makanan='$daerah_makanan' WHERE id_makanan='$id2'";
    $sql2 = mysqli_query($conn, $query2);
    // apakah proses update berhasil?
    if ($sql2) {
        echo "<script>window.alert('Data berhasil diupdate!');window.location='?page=makanan';</script>";
    } else {
        echo "<script>window.alert('Gagal update data!');window.location='?page=makanan';</script>";
    }
}
?>
<table>
    <tr>
        <th colspan="3"><u>Update Data Daftar Makanan</u></th>
    </tr>
    <form method="post" action="">
        <!-- menampung nilai id yang akan di edit -->
        <input type="hidden" name="id" value="<?= $data['id_makanan'] ?>" />
        <tr>
            <td style="width: 8em;">Nama Makanan</td>
            <td>:</td>
            <td><input type="text" name="nama_makanan" style="width: 20em;"
                    value="<?= $data['nama_makanan'] ?>"></td>
        </tr>
        <tr>
            <td style="width: 8em;">Daerah Makanan</td>
            <td>:</td>
            <td><input type="text" name="daerah_makanan" style="width: 20em;"
                    value="<?= $data['daerah_makanan'] ?>">
            </td>
        </tr>
        <tr style="margin-top: 1em;">
            <td></td>
            <td></td>
            <td colspan="3" style="padding: 0.5em;">
                <input type="submit" name="update" value="Update">
                <input type="submit" name="cancel" value="Cancel">
            </td>
        </tr>
    </form>
</table>