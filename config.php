<?php 
    $host = "localhost";
    $username = "root";
    $pass = "";
    $dbname= "latihan_db";

    $db = mysqli_connect($host,$username,$pass,$dbname);

    if(!$db){
        die('Gagal terhubung dengan database :'. mysqli_connect_error());
    }

?>