<?php
    //ambil data dari form
    $nama_kue = $_POST['nama'];
    $jumlah_beli = $_POST['jumlah'];

    // tentukan harga berdasarkan pilihan kue
    switch ($nama_kue) {
        case 'Bolu':
            $harga = 100000000;
            break;
        case 'Brouwnies':
            $harga = 250000000;
            break;
        case 'Donat':
            $harga = 300000000;
            break;        
    }

    // hitung total harga
    $total_harga = $harga * $jumlah_beli;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Totak pembayaran</title>
    <link rel="stylesheet" href="style.cs">
</head>
<body>
    <h1>Total pembayaran</h1>
    <p>nama kue: <?php echo $nama_kue; ?></p>
    <p>jumlah beli: <?php echo $jumlah_beli; ?></p>
    <p>total harga: rp <?php echo number_format($total_harga, 0, ',',''); ?></p>
    <a href="index.php">kembali</a>
</body>
</html>



