<h2>Aplikasi Data Mahasiswa</h2>
<hr>
<a href="input.php">Tambah Data</a>
<table border="1">
    <tr>
        <th>NIM</th>
        <th>NAMA</th>
        <th>JURUSAN</th>
    </tr>
    <?php
    
include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error){
    echo "<tr><td>";
    echo "Gagal koneksi : " . $koneksi->connect_error;
    echo "</td></tr>";
//} else{
//    echo "<tr><td>";
//    echo "Sambungan basis data berhasil";
//    echo "</td><tr>";
}

$query = "select * from data";
$data = $koneksi->query($query);
if($data->num_rows <= 0) {
    echo "<tr><td colspan='3'>";
    echo "DATA NIHIL";
    echo "</td></tr>";
} else {
    while($row = $data ->fetch_assoc()){
        echo "<tr>";
        echo "<td>" .$row["nim"] . " </td> " ;
        echo "<td>" .$row["nama"] . "</td>" ;
        echo "<td>". $row["jurusan"] . "</td>";
        echo '<td><a href="form-edit.php?nim=' .
             $row["nim"] . '">Edit</a></td>';
        echo '<td><a href="hapus.php?nim=' .
             $row["nim"] . '">Hapus</a></td>';
        echo "</tr>";
    }
} 
    ?>
</table>