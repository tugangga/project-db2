<?php
require_once("../config/koneksi.php");

if (isset($_POST['update'])) {
    $kode = $_POST['kode'];
    $barang = $_POST['barang'];
    $jenis = $_POST['jenis'];
    $hbeli = $_POST['hbeli'];
    $hjual = $_POST['hjual'];
    $qtyawal = $_POST['qtyawal'];
    $qtybeli = $_POST['qtybeli'];
    $qtyjual = $_POST['qtyjual'];
    $qtyakhir = $_POST['qtyakhir'];

    $query = "UPDATE barang 
        SET barang = '$barang',
         jenis = '$jenis',
         hbeli = '$hbeli',
         hjual = '$hjual',
         qtyawal = '$qtyawal',
         qtybeli = '$qtybeli',
         qtyjual = '$qtyjual',
         qtyakhir = '$qtyakhir' WHERE kode = '$kode'";
    $hasil = mysqli_query($conn, $query);
    header("Location:?page=products");
}

if (isset($_GET['id'])) {
    $kode = $_GET['id'];
    $hasil = mysqli_query($conn, "SELECT * FROM barang WHERE kode='$kode'");
    $baris = mysqli_fetch_assoc($hasil);
}

?>
<h2 class="pt-3 pb-2 mb-3 border-bottom">Update Form</h2>

<form action="" method="post">
    <div class="row mb-3">
        <label for="kode" class="col-sm-2 col-form-label">Kode</label>
        <div class="col-sm-10">
            <input type="hidden" class="form-control" id="kode" name="kode" value="<?= $id ?>">
            <p class="form-control bg-dark text-white"><?= $id ?></p>
        </div>
    </div>
    <div class="row mb-3">
        <label for="barang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="barang" name="barang" value="<?= $baris['barang'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="jenis" class="col-sm-2 col-form-label">jenis</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $baris['jenis'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="hbeli" class="col-sm-2 col-form-label">Harga Beli</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="hbeli" name="hbeli" value="<?= $baris['hbeli'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="hjual" class="col-sm-2 col-form-label">Harga Jual</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="hjual" name="hjual" value="<?= $baris['hjual'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtyawal" class="col-sm-2 col-form-label">Qty Awal</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qtyawal" name="qtyawal" value="<?= $baris['qtyawal'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtybeli" class="col-sm-2 col-form-label">Qty Beli</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qtybeli" name="qtybeli" value="<?= $baris['qtybeli'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtyjual" class="col-sm-2 col-form-label">Qty Jual</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qtyjual" name="qtyjual" value="<?= $baris['qtyjual'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="qtyakhir" class="col-sm-2 col-form-label">Qty Akhir</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="qtyakhir" name="qtyakhir" value="<?= $baris['qtyakhir'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </div>
</form>