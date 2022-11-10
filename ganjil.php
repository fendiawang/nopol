<?php 
    require 'fungsi.php';
    $rslt2 = mysqli_query($conn, "SELECT * FROM tbnopol WHERE jenis='ganjil'");
if(!$rslt2) {
    echo mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Data Nopol Ganjil</title>
</head>
<body>
<h2 style="text-align:center;">Daftar Pelat Ganjil</h2>
    <table class="table1" align="center">
        <tr>
            <th>No</th>
            <th>Nomor Polisi</th>
        </tr>
            <?php $i = 1; ?>
            <?php foreach ($rslt2 as $row) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["nomor"]; ?></td>
        </tr>
            <?php $i++; ?> 
            <?php endforeach; ?>
    </table>
     </div>
</body>
</html>