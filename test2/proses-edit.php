<?php 
include('config.php');

if(isset($_POST['save'])){
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $foto_lama = $_POST['foto_lama'];

    if($_FILES['foto']['error'] === 4){
        $foto = $foto_lama;
    }else{
        // $foto = 
    }

    //unlink('images/'.$siswa['foto']);
	//move_uploaded_file($tmp ,'images/'.$foto_lama);

    $sql = "UPDATE siswa SET nis= '$nis', nama= '$nama', jenis_kelamin= '$jk', telp= '$telp', alamat= '$alamat' WHERE id = '$id' ";
    $query = mysqli_query($db, $sql);

    //cek apakah query update berhasil atau tidak.
    if($query){
        header('location: list-siswa.php');
    }else{
        die('gagal mengupdate data...');
    }
}else{
    die('Akses Dilarang...');
}

?>