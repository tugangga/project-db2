<?php
require_once('config/koneksi.php');
if (isset($_GET['kode'])) {
    $kode = $_GET['kode'];
    $tgl = date("YYYY-MM-DD HH:mm:ss");

    // echo $tgl;
    mysqli_query($conn, "INSERT INTO keranjang (username,kode,qty,tanggal) VALUES ('admin','$kode',1,NOW())");
    header("Location:index.php");
}
