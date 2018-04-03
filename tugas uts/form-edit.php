<h2> Formulir Update Data </h2>
<hr>
<?php

include "koneksi.php";
$koneksiObj = new Koneksi();
$koneksi = $koneksiObj->getKoneksi();

if($koneksi->connect_error){
    echo "<tr><td>";
    echo "Gagal koneksi : " . $koneksi->connect_error;
    echo "</tr><tr>";
}

    $nim = $_GET['nim'];

    $query = "select * from data_mahasiswa where nim='$nim'";
    $data = $koneksi->query($query);
    $nama = "";
    $jurusan = "";
    if($data->num_rows <= 0) {
        echo "Mas/Mba, kalo isi data sesuai prosedur yah!";
    } else {
        while($row = $data ->fetch_assoc()){
            $nama = $row["nama"];
            $jurusan = $row["jurusan"];
        }
    }
    ?>
    <form action="update.php" method="post">
    <table>
        <tr>
            <td> NIM </kd>
            <td>: <input type="text" name="nim"
            value="<?php echo $nim; ?>" ></td>
        </tr>
        <tr>
            <td> NAMA </td>
            <td>: <input type="text" name="nama"
            value="<?php echo $nama; ?>"></td>
        </tr>
        <tr>
            <td> JURUSAN </td>
            <td> : <input type="text" name="jurusan"
            value="<?php echo $jurusan; ?>"></td>
        </tr>
    </table>
    <input type="submit" value="Simpan">
    <button type="button" onclick="window.location.href='main.php'">Batal</button>
</form>
