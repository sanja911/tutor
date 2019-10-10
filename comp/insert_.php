<?php
	session_start();
	include "koneksi.php";
	$val_in = $di_jawab_SS = $di_jawab_S = $di_jawab_R = $di_jawab_TS =$di_jawab_STS = array();
	foreach ($_POST['jawaban'] as $key => $value) {
		if (empty($value)) {
			$success = false;
			$pesan_gagal = "Ada yang belum diisi";
			break;
		}
		//key = id_soal, value=jawaban A/B/C/D
		$val_in[] = "(" . $_SESSION['username'] . 
				"," . $key . ",'" . $value . "')";
		if ($value == 'SS') {
			$di_jawab_SS[] = $key;
		}
		if ($value == 'S') {
			$di_jawab_S[] = $key;
		}
		if ($value == 'R') {
			$di_jawab_R[] = $key;
		}
		if ($value == 'TS') {
			$di_jawab_TS[] = $key;
		}
		if ($value == 'STS') {
			$di_jawab_STS[] = $key;
		}
	}
	$jawaban_SS = count($di_jawab_SS);
	$jawaban_S = count($di_jawab_S);
	$jawaban_R = count($di_jawab_R);
	$jawaban_TS = count($di_jawab_TS);
	$jawaban_STS = count($di_jawab_STS);
	$id_soal = $_POST['id_soal']; 
	$id_user = $_POST['id_user'];
	$jawaban = $_POST['jawaban'];
	for($i=0;$i<count($jawaban);$i++)
  {
	
	$sql= mysql_query("INSERT INTO angket VALUES ('$id_soal[$i]','$id_user','$jawaban[$i]')");
}
	$sql1= mysql_query("INSERT INTO jawaban VALUES ('$id_user','$jawaban_SS','$jawaban_S','$jawaban_R','$jawaban_TS','$jawaban_STS')");
   

	if ($sql.$sql1){
	 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../tutor/">';
		} else {
					echo "Error!" .mysql_error();
				}
			exit; 
			   


?>
