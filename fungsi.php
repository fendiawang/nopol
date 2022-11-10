<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root", "fandiahmad1014", "nopol");
//ambil data dari tabel nomor_pelat/query data nomor_pelat
$rslt = mysqli_query($conn, "SELECT * FROM tbnopol");
if(!$rslt) {
    echo mysqli_error($conn);
}

function tambah($data) {
    global $conn;
    $a = $data['a'];
    $b = $data['b'];
    $c = $data['c'];

    if($b % 2 == 0) {
        $query = "INSERT INTO tbnopol VALUES
                ('$a $b $c', 'genap')";
    mysqli_query($conn, $query);
    } else {
    $query = "INSERT INTO tbnopol VALUES
                ('$a $b $c', 'ganjil')";
    mysqli_query($conn, $query);
    }

    return mysqli_affected_rows($conn);
}


?>