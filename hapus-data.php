<?php 
include('config.php');

if(isset($_GET['id'])){
    
    $id = $_GET['id'];

    $hapus = "SELECT * FROM siswa WHERE id = $id";
    $result = mysqli_query($db, $hapus);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $foto = $row['foto'];
        unlink($foto);
        $sql = "DELETE FROM siswa WHERE id = $id";
        if(mysqli_query($db, $sql)){
            header('Location: list-siswa.php');
        }else{
            die('gagal menghapus!');
        }
    }

}else{
    die('akses dilarang...');
}

?>
