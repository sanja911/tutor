<?php
	session_start();
	include "koneksi.php";

	$id_kelas=$_POST['id_kelas'];
	$id_tutor = $_POST['id_tutor'];
	$id_mapel = $_POST['id_mapel'];
	$kuota  = $_POST['kuota'];
	
	$kueri= "SELECT max(id) as maxKode FROM kelas";
	$final = mysql_query($kueri);
	$result  = mysql_fetch_array($final);
	$kodeBarang = $result['maxKode'];
	$noUrut = (int) substr($kodeBarang, 3, 3);
	$noUrut++;
	$char = "0";
	$newID = $char . sprintf("%03s", $noUrut);

	$kueri1= "SELECT max(id) as maxKode FROM notifikasi";
	$final1 = mysql_query($kueri1);
	$result1  = mysql_fetch_array($final1);
	$kodeBarang1 = $result1['maxKode'];
	$noUrut1 = (int) substr($kodeBarang1, 3, 3);
	$noUrut1++;
	$char1 = "K";
	$newID1 = $char1 . sprintf("%03s", $noUrut1);
	
	$sql= mysql_query("INSERT INTO kelas VALUES ('$newID','$id_kelas','$id_tutor','$id_mapel','$kuota','<font color=red>menunggu<font>')");
	$sql1= mysql_query("INSERT INTO ambil_tutor VALUES ('','','$id_tutor','$id_mapel','$id_kelas')");
	$sql2= mysql_query("INSERT INTO notifikasi VALUES ('$newID1','User $id_tutor sedang menunggu tanggapan anda untuk kelas baru','ADM','SEND')");
	
	if ($sql.$sql1.$sql2){
	  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../tutor/kelas.php">';
	    } else {
	        		echo "Error!" .mysql_error();
				}
	        exit;


?>
