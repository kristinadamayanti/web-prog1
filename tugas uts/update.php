<?php
include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error){
    echo "Gagal koneksi : " . $koneksi->connect_error;
} else{
    echo "Sambungan basis data berhasil";
}

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

$query = "update data set nama='$nama', jurusan='$jurusan' where nim='$nim'";
echo $query;
if($koneksi->query($query) === true){
    echo "<br> Data " . $_POST["nama"] . " berhasil disimpan. ".
            ' <a href="main.php">Lihat Data</a>';
 } else {
    echo "<br> Data GAGAL disimpan";
        }
        
$koneksi->close();
?>