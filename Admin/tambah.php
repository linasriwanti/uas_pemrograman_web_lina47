<?php
require 'koneksi.php';
if (isset($_POST['submit'])) {
    $nama_barang = $_POST['nama_barang'];
    $merek = $_POST['merek'];
    $harga = $_POST['harga'];
    $exp = $_POST['exp'];
    $gambar = $_POST['gambar'];

    $sql = "INSERT INTO tbl_barang VALUES(NULL,'$nama_barang','$merek','$harga','$exp','$gambar')";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header("location:home.php");
    } else {
        echo 'Data Gagal Ditambahkan' . mysqli_errno($koneksi);
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>INDOAPRIL</title>
</head>

<body>
    <?php include 'navbar_backend.php'; ?>
    <div class="container mt-5">
        <a href="" class="btn btn-primary">Kembali</a>
        <hr>
        <form method="POST" action="#">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Merek Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="merek" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga</label>
                <input type="text" class="form-control" id="nama_barang" name="harga" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Exp</label>
                <input type="date" class="form-control" id="nama_barang" name="exp" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>