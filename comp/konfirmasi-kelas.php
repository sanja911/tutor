<?php
session_start();
include "koneksi.php";
$id	= $_GET['id'];
$sql=mysql_query("UPDATE kelas SET status='<font color=green>Dikonfirmasi<font>' WHERE id='$id'");
if ($sql){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../admin/kelas.php">';
  }else {
    $_SESSION['pesan']="<div class='alert bg-danger' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em> Update gagal ! Silahkan hubungi administratorx <a href='#' class='pull-right'><em class='fa fa-lg fa-close'></em></a></div>
    ";
    header("location:../admin/kelas.php");
          }
      exit;

die ("Terdapat Kesalahan : ".mysql_error());

?>
