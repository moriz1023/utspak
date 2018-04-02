<?php

include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
    die("koneksine Gagal Bos : " . $koneksi->connect_error);
} else {
    echo "koneksi ke basis data SUKSES";
}


$query = "INSERT INTO moriz(NIM,NAMA,JURUSAN) VALUES(".$_POST["NIM"].",'".$_POST["NAMA"]."','".$_POST["JURUSAN"]."') ";

if($koneksi->query($query)==true){
    echo "<br>Data".$_POST["NAMA"].
    " Wis Tersimpan. Data Iso Dideleng ".
    '<a href="main.php">Nangkene</a>';
}else{
    echo "error : " . $query." -> " . $koneksi->error;
}

$koneksi->close();
?>