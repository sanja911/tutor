<thead >
  <tr align="center">
    <th width="2%">No</th>
    <th width="20%">Nama User</th>
    <th width="10%">Prestasi</th>
    <th width="10%">Lulusan</th>
    <th width="20%">Link Bahan Ajar</th>
    <th width="10%">Status</th>
    <th width="30%">Aksi</th>
  </tr>
</thead>
<tbody>
  <?php
 
  $query = mysql_query ("SELECT * FROM prestasi INNER JOIN user ON prestasi.id_user = user.id_user INNER JOIN kriteria ON prestasi.id_user=kriteria.id_user order by user.id_user  ASC");
    if($query == false){
      die ("Terjadi Kesalahan : ". mysql_error());
    }
    $i=1;
    while ($ar = mysql_fetch_array ($query)){
      ?>
    <tr>
          <td align="center"><?php echo $i; ?></td>
          <td align="center"><?php echo $ar['nama_lengkap'];?> (<?php echo $ar['username'];?>)</td>
          <td align="center"><?php echo $ar['nama_pres'];?> <?php echo $ar['prestasi']; ?></td>
          <td align="center"><?php echo $ar['lulusan'];?> <?php echo $ar['nama_univ'] ?></td>
          <td align="center"><?php echo $ar['link'];?></td>
          <td align="center"><?php echo $ar['status'];?></td>
          <?php echo"
          <td align=center>
          <a href='#' onClick='confirm_tut(\"../comp/konfirmasi-tut.php?id=$ar[id]\")'><button type='button' class='btn btn-sm btn-success'>Konfirmasi</button></a>
          <a href='#' onClick='confirm_delete(\"../comp/del2.php?id=$ar[id]\")'><button type='button' class='btn btn-sm btn-danger'>Hapus</button></a>
          <a href='#' class='open_modal2' id='$ar[id]'><button type='button' class='btn btn-sm btn-info'>Detail</button></a>
          </td>
        </tr>";
    $i++;
  }
  ?>
</tbody>
