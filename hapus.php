<?php
$id = $_GET['id'];
include "database.php";
$obj = new database();
$obj->hapus($id);

echo "<meta http-equiv=refresh content=2;URL='tampil.php'>";
?>