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