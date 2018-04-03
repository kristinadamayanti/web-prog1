<?php
include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error){
    echo "Gagal koneksi : " . $koneksi->connect_error;
} else{
    echo "Sambungan basis data berhasil";
}

$qry = "delete from data_mahasiswa where nim=" . $_GET["nim"];

if($koneksi->query($qry) === true){
    echo "<br> Data " . $_GET["nim"] . 
        " berhasil dihapus. ".
        ' <a href="main.php">Lihat Data</a>';
} else {
    echo "<br> Data GAGAL dihapus";
}

$koneksi->close();

?>