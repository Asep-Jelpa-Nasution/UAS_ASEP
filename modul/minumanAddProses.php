<?php
// cek apakah tombol simpan sudah diklik atau blum?
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
<table>
    <tr>
        <th colspan="3"><u>Tambah Data Daftar minuman</u></th>
    </tr>
    <form method="post" action="">
        <tr>
            <td style="width: 8em;">Nama minuman</td>
            <td>:</td>
            <td><input type="text" name="nama_minuman" style="width:20em;"></td>
        </tr>
        <tr>
            <td style="width: 8em;">Daerah minuman</td>
            <td>:</td>
            <td><input type="text" name="daerah_minuman" style="width:20em;"></td>
        </tr>
        <tr style="margin-top: 1em;">
            <td></td>
            <td></td>
            <td colspan="3" style="padding: 0.5em;">
                <input type="submit" name="submit" value="Submit">
                <input type="reset" value="Reset">
                <input type="submit" name="cancel" value="Cancel">
            </td>
        </tr>
    </form>
</table>