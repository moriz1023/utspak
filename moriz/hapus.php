<?php

include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Pangapurane Sing Akeh , Koneksine Kwn Gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data sukses!";
}



$query = "delete from moriz where NIM = " . 
        $_GET["NIM"];
        
//echo $query

if($koneksi->query($query)==true){
    echo "<br>Data dengan NIM " . $_GET["NIM"] . 
    " Datane Wis Terhapus Yak. Data Iso Dideleng " . 
    '<a href="main.php">Nangkene';
}else {
    echo "error : ".$query." -> ".$koneksi->error;
}

$koneksi->close();
?>