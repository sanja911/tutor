<?php
session_start();
include "koneksi.php";
if(isset($_POST['submit_row']))
{
$query  = "SELECT * FROM user where username='$_SESSION[username]'";
$hasil  = mysql_query($query);
$jumlah = mysql_fetch_assoc($hasil);
$query1  = "SELECT * FROM kriteria where id_user='$jumlah[id_user]'";
$hasil1  = mysql_query($query1);
$jumlah1 = mysql_fetch_assoc($hasil1);
$id_user		= $jumlah['id_user'];
$prestasi		= $_POST['prestasi'];
$lulusan    = $_POST['lulusan'];
$universitas= $_POST['universitas'];
$qualifikasi= $_POST['qualifikasi'];
$jumlah = count($lulusan);
$kueri= "SELECT max(id) as maxKode FROM prestasi";
	$final = mysql_query($kueri);
	$result  = mysql_fetch_array($final);
	$kodeBarang = $result['maxKode'];
	$noUrut = (int) substr($kodeBarang, 3, 3);
	$noUrut++;
	$char = "P";
	$newID = $char . sprintf("%03s", $noUrut);
if(isset($_FILES['files'])){
  $errors= array();
  foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
    $file_name = $key.$_FILES['files']['name'][$key];
    $file_size =$_FILES['files']['size'][$key];
    $file_tmp =$_FILES['files']['tmp_name'][$key];
    $file_type=$_FILES['files']['type'][$key];	
    if($file_size > 2097152){
      $errors[]='Ukuran file tidak boleh lebih dari 2 MB';
    }

for($i=0;$i<count($prestasi);$i++)
  {
    $sql=mysql_query("INSERT INTO prestasi values ('$id','$id_user','$prestasi[$i]','$lulusan[$i]','$universitas[$i]','$qualifikasi[$i]','$file_name','menunggu')");
  } 
}
if ($sql){
  $desired_dir="sertifikat";
  if(empty($errors)==true){
    if(is_dir($desired_dir)==false){
      mkdir("$desired_dir", 0700);		// Create directory if it does not exist
    }
    if(is_dir("$desired_dir/".$file_name)==false){
      move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
    }else{									// rename the file if another one exist
      $new_dir="$desired_dir/".$file_name.time();
       rename($file_tmp,$new_dir) ;				
    }
   mysql_query($query);			
  }else{
      print_r($errors);
  }
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../tutor/index.php">';
    }else {
      $_SESSION['pesan']="<div class='alert bg-danger' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em> Update gagal ! Silahkan hubungi administrator <a href='#' class='pull-right'><em class='fa fa-lg fa-close'></em></a></div>
      ";
      header("location:../index.php");
			}}}
        exit;

?>