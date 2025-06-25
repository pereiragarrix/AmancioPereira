<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota Gym</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Anggota Gym</h2>
        <a href="tambah.php">Tambah Anggota</a><br><br>
        <table>
            <tr>
                <th>ID Anggota</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Paket</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Berakhir</th>
                <th>Aksi</th>
            </tr>
            <?php
            include 'koneksi.php';
            $result = mysqli_query($conn, "SELECT * FROM anggota");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['alamat']}</td>
                        <td>{$row['jenis_paket']}</td>
                        <td>{$row['tanggal_mulai']}</td>
                        <td>{$row['tanggal_berakhir']}</td>
                        <td>
                            <a href='edit.php?id={$row['id']}'>Edit</a> | 
                            <a href='hapus.php?id={$row['id']}' onclick=\"return confirm('Yakin hapus?');\">Hapus</a>
                        </td>
                      </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
