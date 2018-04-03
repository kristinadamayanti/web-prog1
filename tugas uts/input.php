
<html> Formulir Tambah / Ubah Data
<hr>
<form action="simpan-baru.php" method="post">
    <table>
        <tr>
            <td> NIM </kd>
            <td>: <input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>: <input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>JURUSAN</td>
            <td> : <input type="text" name="jurusan"></td>
        </tr>
    </table>
    <input type="submit" value="Simpan">
    <button type="button" onclick="window.location.href='main.php'">Batal</button>
</form>
</html>