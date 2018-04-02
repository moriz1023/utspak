<?php

include "koneksi.php";
$koneksiObj=new Koneksi();
$koneksi= $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}else{
	echo "Koneksi ke basis data sukses!";
}



$query = "update mahasiswa " .
        "set NAMA = '" . $_POST["NAMA"] . "'," .
        "   JURUSAN = '" . $_POST["JURUSAN"] . "' " . 
        "where NIM = " . $_POST["NIM"];

//echo $query

if($koneksi->query($query)==true){
    echo "<br>Data " . $_POST["NAMA"] . 
    " sudah berubah. Data bisa dilihat " . 
    '<a href="main.php">disini</a>';
}else {
        echo "error : ".$query." -> ".$koneksi->error;
}

$koneksi->close();
?>