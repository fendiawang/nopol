<?php
require 'fungsi.php';

if(isset($_POST["submit"])) {
    if(tambah($_POST) > 0){
        echo "<script>alert('Data berhasil ditambahkan');</script>";
        echo "<script>location='form.php'</script>";
    }else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
        echo "<script>location='form.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="warna.css">
    <title>Input Nopol</title>
  
</head>
<body>
    <div class="card">
        <form action="" method="post">
            <h2 style="text-align:center;">Masukan Nopol Anda</h2>
            <input type="text" class="form-control mb-20" placeholder="Kode Huruf Awal" name="a"></br>
            <input type="text" class="form-control mb-20" placeholder="Nopol" name="b"></br>
            <input type="text" class="form-control mb-20"placeholder="Kode Huruf Akhir" name="c"></br>
            <button name="submit" class="btn">Input</button>
        </form>
        <br>
        <a href="ganjil.php"><button class="btn">Daftar Ganjil</button></a>
        <br>
        <br>
        <a href="genap.php"><button class="btn">Daftar Genap</button></a>
        <br>
    
    </div>

</body>
</html>