<?php
require_once("../config/koneksi.php");
if (isset($_POST['submit'])) {
    $kode = $_POST['kode'];
    $barang = $_POST['barang'];
    $jenis = $_POST['jenis'];
    $hbeli = $_POST['hbeli'];
    $hjual = $_POST['hjual'];
    $qtyawal = $_POST['qtyawal'];
    $qtybeli = $_POST['qtybeli'];
    $qtyjual = $_POST['qtyjual'];
    $qtyakhir = $_POST['qtyakhir'];

    $query = "INSERT INTO barang VALUES (
         '$kode',
         '$barang',
         '$jenis',
         '$hbeli',
         '$hjual',
         '$qtyawal',
         '$qtybeli',
         '$qtyjual',
         '$qtyakhir',
         ''
    )";

    mysqli_query($conn, $query);

    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $nama = $_FILES['photo']['name'];
    $x = explode('.', $nama);

    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['photo']['size'];
    $file_tmp = $_FILES['photo']['tmp_name'];
    $namaBaru = bin2hex(random_bytes(20)) . "." . $ekstensi;

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 10440700) {
            move_uploaded_file($file_tmp, '../images/' . $namaBaru);
            $query2 = mysqli_query($conn, "UPDATE barang SET gambar = '$namaBaru' WHERE kode = '$kode'");
            if ($query2) {
                header("Location:?page=products");
            } else {
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}
?>
<h2 class="pt-3 pb-2 mb-3 border-bottom">Add New Product</h2>

<form action="" method="post" enctype="multipart/form-data">
    <div class="row mb-3">
        <label for="kode" class="col-sm-2 col-form-label">Kode</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="kode" name="kode" autofocus>
        </div>
    </div>
    <div class="row mb-3">
        <label for="barang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="barang" name="barang">
        </div>
    </div>
    <div class="row mb-3">
        <label for="jenis" class="col-sm-2 col-form-label">jenis</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="jenis" name="jenis">
        </div>
    </div>
    <div class="row mb-3">
        <label for="hbeli" class="col-sm-2 col-form-label">Harga Beli</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="hbeli" name="hbeli" value="0">
        </div>
    </div>
    <div class="row mb-3">
        <label for="hjual" class="col-sm-2 col-form-label">Harga Jual</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="hjual" name="hjual" value="0">
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtyawal" class="col-sm-2 col-form-label">Qty Awal</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qtyawal" name="qtyawal" value="0">
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtybeli" class="col-sm-2 col-form-label">Qty Beli</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qtybeli" name="qtybeli" value="0">
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtyjual" class="col-sm-2 col-form-label">Qty Jual</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qtyjual" name="qtyjual" value="0">
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtyakhir" class="col-sm-2 col-form-label">Qty Akhir</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qtyakhir" name="qtyakhir" value="0">
        </div>
    </div>
    <div class="row mb-3">
        <label for="photo" class="col-sm-2 col-form-label">Product Image</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="photo" name="photo">
        </div>
    </div>
    <div class="row mb-3">
        <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
    </div>
</form>