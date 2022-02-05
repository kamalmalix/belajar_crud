<?php 
    include('config.php');

    if(!isset($_GET['id'])){
        header('Location: list-siswa.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("data tidak ditemukan!");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <header>
        <h1>Edit Data Siswa</h1>
    </header>
    <form action="proses-edit.php" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="id" value="<?= $siswa['id']?>">
        <input type="text" name="foto_lama" value="<?= $siswa['foto']?>">

        <p>
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" placeholder="" value="<?= $siswa['nis']?>">
        </p>

        <p>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" placeholder="" value="<?= $siswa['nama']?>">
        </p>

        <p>
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <?php $jk = $siswa['jenis_kelamin'];?>
            <label><input type="radio" name="jk" value="laki-laki" <?=($jk == 'laki-laki')? "checked":""?> >Laki-laki</label>
            <label><input type="radio" name="jk" value="perempuan" <?=($jk == 'perempuan')? "checked":""?> >Perempuan</label>
        </p>

        <p>
            <label for="telp">Telepon</label>
            <input type="text" name="telp" id="telp" placeholder="" value="<?= $siswa['telp']?>">
        </p>

        <p>
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat"><?= $siswa['alamat']?></textarea>
        </p>

        <p>
            <label for="foto">Foto</label>
            <img src="<?= $siswa['foto']?>" alt="" width="100" height="100">
            <input type="file" name="foto" id="foto" placeholder="">
        </p>

        <p>
            <input type="submit" name="save" value="Save">
        </p>

    </form>
</body>
</html>