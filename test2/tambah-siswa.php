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
        <h1>Tambah Data Siswa</h1>
    </header>
    <form action="proses-tambah.php" method="POST" enctype="multipart/form-data">
        <p>
            <label for="nis">NIS</label>
            <input type="text" name="nis" id="nis" placeholder="">
        </p>

        <p>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nis" placeholder="">
        </p>

        <p>
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <label><input type="radio" name="jk" value="laki-laki">Laki-laki</label>
            <label><input type="radio" name="jk" value="perempuan">Perempuan</label>
        </p>

        <p>
            <label for="telp">Telepon</label>
            <input type="text" name="telp" id="telp" placeholder="">
        </p>

        <p>
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat"></textarea>
        </p>

        <p>
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" placeholder="">
        </p>

        <p>
            <input type="submit" name="simpan" value="simpan">
        </p>

    </form>
</body>
</html>