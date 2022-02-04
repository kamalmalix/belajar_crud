<?php
    include('config.php');

    if(isset($_POST['simpan'])){
            // ambil data dari form
            $nis= $_POST['nis'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $telp = $_POST['telp'];
            $alamat = $_POST['alamat'];

            $foto = $_FILES['foto']['name'];
            $ukuran = $_FILES['foto']['size'];
            $error = $_FILES['foto']['size'];
            $tmp = $_FILES['foto']['tmp_name'];

            //rename nama foto dengan menambahkan tanggal & jam upload
            $fotonew = date('dmYHis').$foto;

            //set path folder penyimpanan fotonya
            $path = "images/".$fotonew;

            if(move_uploaded_file($tmp,$path)){
                $sql = "INSERT INTO siswa(nis, nama, jenis_kelamin, telp, alamat, foto) VALUES ('$nis', '$nama', '$jk', '$telp', '$alamat', '$fotonew')";
                $query = mysqli_query($db,$sql);

                if($query){
                    header('location: list-siswa.php');
                }else{
                    echo 'gagal di upload';
                }
            }else{
                echo 'foto gagal di upload'; 
            }

    }else{
        die('Akses dilarang');
    }


?>

