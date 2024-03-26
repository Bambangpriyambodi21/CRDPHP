<?php

echo "
<h1>Input Mahasiswa</h1>
<form action='' method='post'>
    <input type='text' name='nama' placeholder='Nama'></input>
    <input type='text' name='alamat' placeholder='Alamat'></input>
    <input type='text' name='umur' placeholder='Umur'></input>
    <input type='submit' value='save' name='process'></input>
</form>
";

include "database.php";
if(isset($_POST['process'])){
    $obj = new database();
    $obj->simpan("$_POST[nama]", "$_POST[alamat]", "$_POST[umur]");
    echo "<meta http-equiv=refresh content=2;URL='tampil.php'>";
}

?>