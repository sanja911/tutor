<?php
session_start();
include "koneksi.php";
$id	= $_GET['id'];
$hapus=mysql_query("SELECT * FROM kelas JOIN ambil_tutor ON kelas.id_kelas=ambil_tutor.id_kelas WHERE kelas.id='$id'");
$r=mysql_fetch_array($hapus);
if($hapus2 = mysql_query ("DELETE FROM kelas WHERE id='$id'")){
    if($hapus2 = mysql_query ("DELETE FROM ambil_tutor WHERE id_kelas='$r[id_kelas]'")){
    header("Location: ../tutor/kelas.php");
    }
}
die ("Terdapat Kesalahan : ".mysql_error());

?>
