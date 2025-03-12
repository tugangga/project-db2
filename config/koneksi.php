<?php
require_once("config.php");
$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

if (!$conn) {
    echo "koneksi gagal";
}
