<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota Gym</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Anggota Gym</h2>
        <form method="POST" action="">
            Nama: <input type="text" name="nama" required><br>
            Alamat: <input type="text" name="alamat" required><br>
            Jenis Paket: <input type="text" name="jenis_paket" required><br>
            Tanggal Mulai: <input type="date" name="tanggal_mulai" required><br>
            Tanggal Berakhir: <input type="date" name="tanggal_berakhir" required><br>
            <button type="submit" name="simpan">Simpan</button>
        </form>

        <?php
        if (isset($_POST['simpan'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jenis_paket = $_POST['jenis_paket'];
            $tanggal_mulai = $_POST['tanggal_mulai'];
            $tanggal_berakhir = $_POST['tanggal_berakhir'];

            $query = "INSERT INTO anggota (nama, alamat, jenis_paket, tanggal_mulai, tanggal_berakhir) VALUES ('$nama', '$alamat', '$jenis_paket', '$tanggal_mulai', '$tanggal_berakhir')";
            
            if (mysqli_query($conn, $query)) {
                echo "Data berhasil ditambahkan!";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
        ?>
    </div>
</body>
</html>
