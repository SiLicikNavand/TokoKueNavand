<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Toko Kue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center><h1>Toko Kue Navand</h1></center>

    <form action="proses.php" method="POST">
    <label for="nama">Nama Kue:</label>
    <select name="nama" if="nama">
        <option value="Bolu"> Bolu - Ro 200.000.000</option>
        <option value="Brouwnies"> Brouwnies - Rp 250.000.000</option>
        <option value="Donat"> Donat - 300.000.000</option>
    </select>

    <label for="jumlah"> jumlah Beli</label>
    <input type="number" name="jumlah" id="jumlah" required>

    <button type="submit"> Hitung Total</button>
    </form>
</body>
</html>