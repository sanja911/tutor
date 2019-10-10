<?php
session_start();
include "../comp/koneksi.php";
if(isset($_POST['submit_row']))
{
$query  = "SELECT * FROM user where username='$_SESSION[username]'";
$hasil  = mysql_query($query);
$jumlah = mysql_fetch_assoc($hasil);
$query1  = "SELECT * FROM kriteria where id_user='$jumlah[id_user]'";
$hasil1  = mysql_query($query1);
$jumlah1 = mysql_fetch_assoc($hasil1);
$id_user		= $jumlah['id_user'];
$nama_lengkap		= $_POST['nama_lengkap'];
$email			= $_POST['email'];
$password 		= $_POST['password'];
$tgl_lahir		= $_POST['tgl_lahir'];
$awal         = $_POST['awal'];
$akhir        = $_POST['akhir'];
$date1 		    = date('Y-m-d', strtotime($awal));
$rubah1 			= date_create($awal);
$date2 		    = date('Y-m-d', strtotime($akhir));
$rubah2 			= date_create($akhir);
$lama_mengajar= date_diff($rubah2,$rubah1);
$tempat_lahir = $_POST['tempat_lahir'];
$link_tutor   = $_POST['link_tutor'];
$date 		    = date('Y-m-d', strtotime($tgl_lahir));
$rubah 				= date_format(date_create($tgl_lahir), 'Y');
$thn_skrg 		= date('Y');
$usia 				= $thn_skrg - $rubah;
$alamat       = $_POST['alamat'];
//-------------------------- Data Tutor -------------------------
$nama_pres	= $_POST['nama_pres'];
$prestasi		= $_POST['prestasi'];
$qualifikasi= $_POST['qualifikasi'];
$nama_univ  =$_POST['nama_univ'];
$lulusan    = $_POST['lulusan'];
$universitas= $_POST['universitas'];
$kueri= "SELECT max(id) as maxKode FROM prestasi";
	$final = mysql_query($kueri);
	$result  = mysql_fetch_array($final);
	$kodeBarang = $result['maxKode'];
	$noUrut = (int) substr($kodeBarang, 3, 3);
	$noUrut++;
	$char = "P";
	$newID = $char . sprintf("%03s", $noUrut);
  $ekstensi_diperbolehkan	= array('png','jpg');
  $nama = $_FILES['file']['name'];
  $x = explode('.', $nama);
  $ekstensi = strtolower(end($x));
  $ukuran	= $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
   if($ukuran < 104407000){
   move_uploaded_file($file_tmp, '../comp/sertifikat/'.$nama);

   $ekstensi_diperbolehkan1	= array('png','jpg');
   $nama1 = $_FILES['file1']['name'];
   $x1 = explode('.', $nama1);
   $ekstensi1 = strtolower(end($x));
   $ukuran1	= $_FILES['file1']['size'];
   $file_tmp1 = $_FILES['file1']['tmp_name'];
   if(in_array($ekstensi1, $ekstensi_diperbolehkan1) === true){
    if($ukuran < 104407000){
    move_uploaded_file($file_tmp1, '../comp/sertifikat/'.$nama1);

    $ekstensi_diperbolehkan2	= array('png','jpg');
    $nama2 = $_FILES['file2']['name'];
    $x2 = explode('.', $nama);
    $ekstensi2 = strtolower(end($x));
    $ukuran2	= $_FILES['file2']['size'];
    $file_tmp2 = $_FILES['file2']['tmp_name'];
    if(in_array($ekstensi2, $ekstensi_diperbolehkan2) === true){
     if($ukuran2 < 104407000){
     move_uploaded_file($file_tmp2, '../comp/sertifikat/'.$nama2);
   
$sql= mysql_query("UPDATE user SET nama_lengkap='$nama_lengkap', email='$email',tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',password='$password' WHERE id_user='$jumlah[id_user]'");
$sql2=mysql_query("UPDATE kriteria SET umur='$usia', lama_mengajar='$lama_mengajar->y',alamat='$alamat',link='$link_tutor',awal='$date1',akhir='$date2' WHERE id_user='$jumlah[id_user]'");
$sqlinput=mysql_query("INSERT INTO prestasi VALUES ('$newID','$id_user','$prestasi','$nama_pres','$lulusan','$nama_univ','$universitas','$qualifikasi','$nama','$nama1','$nama2','Menunggu')");
if ($sql.$sql2.$sqlinput){
 $_SESSION['sukses']="<div class='alert bg-teal' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em> Update Sukses ! <a href='#' class='pull-right'><em class='fa fa-lg fa-close'></em></a></div>
 ";
header("location:index.php");
 }else {
  $_SESSION['error']="<div class='alert bg-danger' role='alert'><em class='fa fa-lg fa-warning'>&nbsp;</em> Update gagal! Lengkapi form dahulu <a href='#' class='pull-right'><em class='fa fa-lg fa-close'></em></a></div>
  ";
  header("location:prestasi.php");
       		echo "Error!" .mysql_error();
			}
     }
     }}}}}} exit;
?>