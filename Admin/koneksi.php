<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'db_market');
if (!$koneksi) {
    die('Koneksi Gagal' . mysqli_connect_errno());
}
