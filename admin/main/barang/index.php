<?php
require_once("../config/koneksi.php");

$hasil = mysqli_query($conn, "SELECT * FROM barang");
?>

<h2 class="pt-3 pb-2 mb-3 border-bottom">Products</h2>
<div class="row mb-3">
    <a href="?page=product-add" class="btn btn-success">Add Products</a>
</div>
<div class=" table-responsive small">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jenis</th>
                <th scope="col">Harga Beli</th>
                <th scope="col">Harga Jual</th>
                <th scope="col">Qty Awal</th>
                <th scope="col">Qty Beli</th>
                <th scope="col">Qty Jual</th>
                <th scope="col">Qty Akhir</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            while ($baris = mysqli_fetch_assoc($hasil)) {
            ?>
                <tr>
                    <td><?= $nomor++ ?></td>
                    <td><?= $baris['kode'] ?></td>
                    <td><?= $baris['barang'] ?></td>
                    <td><?= $baris['jenis'] ?></td>
                    <td><?= $baris['hbeli'] ?></td>
                    <td><?= $baris['hjual'] ?></td>
                    <td><?= $baris['qtyawal'] ?></td>
                    <td><?= $baris['qtybeli'] ?></td>
                    <td><?= $baris['qtyjual'] ?></td>
                    <td><?= $baris['qtyakhir'] ?></td>
                    <td>
                        <img src="../images/<?= $baris['gambar'] ?>" alt="" width="100">
                    <td>
                        <a href="?page=products&id=<?= $baris['kode'] ?>"><i class="bi bi-pencil-square"></i></a>
                        <a href="?page=products-hapus&id=<?= $baris['kode'] ?>"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>