<?php
require_once("../config/koneksi.php");
if (isset($_GET['id'])) {
    $kode = $_GET['id'];

    $query = "DELETE FROM barang WHERE kode = '$kode'";
    $hasil = mysqli_query($conn, $query);
}
header("Location:?page=products");
