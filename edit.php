<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM anggota WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota Gym</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Anggota Gym</h2>
        <form method="POST" action="">
            Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
            Alamat: <input type="text" name="alamat" value="<?php echo $row['alamat']; ?>" required><br>
            Jenis Paket: <input type="text" name="jenis_paket" value="<?php echo $row['jenis_paket']; ?>" required><br>
            Tanggal Mulai: <input type="date" name="tanggal_mulai" value="<?php echo $row['tanggal_mulai']; ?>" required><br>
            Tanggal Berakhir: <input type="date" name="tanggal_berakhir" value="<?php echo $row['tanggal_berakhir']; ?>" required><br>
            <button type="submit" name="update">Update</button>
        </form>

        <?php
        if (isset($_POST['update'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jenis_paket = $_POST['jenis_paket'];
            $tanggal_mulai = $_POST['tanggal_mulai'];
            $tanggal_berakhir = $_POST['tanggal_berakhir'];

            $query = "UPDATE anggota SET nama='$nama', alamat='$alamat', jenis_paket='$jenis_paket', tanggal_mulai='$tanggal_mulai', tanggal_berakhir='$tanggal_berakhir' WHERE id=$id";
            
            if (mysqli_query($conn, $query)) {
                echo "Data berhasil diupdate! <a href='index.php'>Kembali</a>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
        ?>
    </div>
</body>
</html>
