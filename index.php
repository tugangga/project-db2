<?php
require_once('config/koneksi.php');
$hasil = mysqli_query($conn, "SELECT * FROM barang");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- botstrapt icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <?php
    $hasil2 = mysqli_query($conn, "SELECT sum(qty) AS jmldata FROM keranjang");
    $jumlah = mysqli_fetch_assoc($hasil2);
    ?>
    <nav class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">Toko-Onine</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link btn" href="keranjang.php">Keranjang
                        <span class="badge text-bg-danger">
                            <?= $jumlah['jmldata'] ?>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="album">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                while ($data = mysqli_fetch_assoc($hasil)) {
                ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="images/<?= $data['gambar'] ?>" alt="<?= $data['gambar'] ?>">
                            <div class="card-body">
                                <p class="card-text"><?= $data['barang'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <p class="text-danger fw-bold ">Rp. <?= number_format($data['hjual'], 0, ',', '.'); ?></p>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Beli</button>
                                        <a href="add-keranjang.php?kode=<?= $data['kode'] ?>" type="button" class="btn btn-sm btn-outline-secondary">+Keranjang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>


    <footer class="bg-black">
        <div class="container mt-5 py-5 text-white text-center">
            <p>copyright@2025</p>

        </div>



    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>