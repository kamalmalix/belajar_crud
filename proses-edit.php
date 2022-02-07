<?php 
include('config.php');

if(isset($_POST['save'])){
    $id     = $_POST['id'];
    $nis    = $_POST['nis'];
    $nama   = $_POST['nama'];
    $jk     = $_POST['jk'];
    $telp   = $_POST['telp'];
    $alamat = $_POST['alamat'];

    if((!$_FILES["foto"]["error"] == 4)){
       try {
            $base_dir = realpath($_SERVER["DOCUMENT_ROOT"]);

            unlink($_POST['foto_lama']);

            $new_foto = md5(rand()).str_replace(" ", "",$_FILES["foto"]["name"]);

            $path = "images/".$new_foto;

            $sql = "UPDATE siswa SET nis= '$nis', nama= '$nama', jenis_kelamin= '$jk', telp= '$telp', alamat= '$alamat', foto = '$path' WHERE id = '$id' ";
            mysqli_query($db, $sql);
            
            move_uploaded_file($_FILES["foto"]["tmp_name"] ,$path);

            header('location: index.php');

        } catch (\Throwable $th) {
                die('gagal mengupdate data...');
        }

    }else{
        try {
                   
            $sql = "UPDATE siswa SET nis= '$nis', nama= '$nama', jenis_kelamin= '$jk', telp= '$telp', alamat= '$alamat' WHERE id = '$id' ";
            
            $query = mysqli_query($db, $sql);

            header('location: index.php');

        } catch (\Throwable $th) {
                die('gagal mengupdate data...');
        }

    }

   
}else{
    die('Akses Dilarang...');
}

?>
