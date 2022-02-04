<?php 
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <a href="tambah-siswa.php">Tambah Data</a>
    <br><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telp</th>
            <th>Alamat</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php 
            $sql = "SELECT * FROM siswa";
            $query = mysqli_query($db, $sql);
            $n = 1;
            while( $siswa = mysqli_fetch_array($query)){
            ?>

            <tr>
                <td><?= $n ?></td>
                <td><img src="images/<?= $siswa['foto']?>" alt="" width="100" height="100"></td>
                <td><?= $siswa['nis'] ?></td>
                <td><?= $siswa['nama'] ?></td>
                <td><?= $siswa['jenis_kelamin'] ?></td>
                <td><?= $siswa['telp'] ?></td>
                <td><?= $siswa['alamat'] ?></td>
                <td>
                    <a href="edit-data.php?id=<?= $siswa['id'] ?>">Edit</a> |
                    <a href="hapus-data.php?id=<?= $siswa['id'] ?>" onclick="return confirm('Are you sure to delete this record?')">Delete</a>
                </td>
            </tr>
        <?php $n++; }?>
        
    </table>
</body>
</html>