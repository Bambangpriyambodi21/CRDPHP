<?php
class Database{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "1m2h3b4y5W&";
    var $db = "db_akademik";
    var $koneksi;

    public function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        if (!$this->koneksi) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
    }

    public function tampil(){
        $sql = "SELECT * FROM mahasiswa";
        $data = mysqli_query($this->koneksi, $sql);
        while ($show = mysqli_fetch_array($data)){
            echo "
            <tr>
                <td>$show[id]</td>
                <td>$show[nama]</td>
                <td>$show[alamat]</td>
                <td>$show[umur]</td>
                <td><a href='hapus.php?id=$show[id]'>Hapus<a></td>
            </tr>
            ";
        }
    }

    public function simpan($fnama, $falamat, $fumur){
        $sql = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES ('$fnama', '$falamat', '$fumur')";
        if (mysqli_query($this->koneksi, $sql)) {
            echo "Data berhasil ditambahkan";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->koneksi);
        }
    }

    public function hapus($fid){
        $sql = "DELETE FROM mahasiswa WHERE id='$fid'";
        if (mysqli_query($this->koneksi, $sql)) {
            echo "Data berhasil dihapus";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->koneksi);
        }
    }
}

?>