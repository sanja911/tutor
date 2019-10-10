  
  <thead>
    <tr align="center">
      <th width="2%">No</th>
      <th width="15%">Nama Kelas</th>
      <th width="30%">ID Tutor</th>
      <th width="15%">ID Mapel</th>
      <th width="10%">Kuota</th>
      <th width="10%">Status</th>
      <th width="40%">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $query = mysql_query ("SELECT * FROM kelas where status='<font color=red>menunggu<font>'");
      if($query == false){
        die ("Terjadi Kesalahan : ". mysql_error());
      }
      $i=1;
      while ($ar = mysql_fetch_array ($query)){

        ?>
       
          <tr>
            <td align="center"><?php echo $i; ?></td>
            <td align="center"><?php echo $ar['id_kelas'];?></td>
            <td align="center"><?php echo $ar['id_tutor'];?></td>
            <td align="center"><?php echo $ar['id_mapel'];?></td>
            <td align="center"><?php echo $ar['kuota'];?> / <?php echo $ar['kuota'];?></td>
            <td align="center"><?php echo $ar['status'];?></td>
            
            <?php echo"
            <td align=center>
            <a href='#' onClick='confirm_delete(\"../comp/hapus-kelas.php?id=$ar[id]\")'><button type='button' class='btn btn-sm btn-danger'>Hapus</button></a>
            <a href='#' onClick='confirm_kelas(\"../comp/konfirmasi-kelas.php?id=$ar[id]\")'><button type='button' class='btn btn-sm btn-success'>Konfirmasi</button></a>
            </td>
          </tr>";
      $i++;
      }
    ?>
  </tbody>
