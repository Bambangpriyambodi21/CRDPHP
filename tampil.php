<?php
echo "<h1>Data mahasiswa</h1>";
echo "<a href='simpan.php'>Input Data</a>";
echo "<table border='1'>
<tr>
    <td>No</td>
    <td>Nama</td>
    <td>Alamat</td>
    <td>Usia</td>
    <td>Opsi</td>
</tr>
";
include "database.php";
$obj = new database();
$obj->tampil();
echo "</table>";
?>