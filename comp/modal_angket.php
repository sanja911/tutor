<?php
  include "koneksi.php";
$id=$_GET['id'];
 $sql1 = "select * from user where id='$id'";
$hasil1 = mysql_query($sql1);
$data1  = mysql_fetch_array($hasil1);
$modal=mysql_query("SELECT * FROM user WHERE id='$id'");
//while($r=mysql_fetch_array($modal)){
$sql = "select * from user where id_user='$data1[id_user]'";
$hasil = mysql_query($sql);
$data  = mysql_fetch_array($hasil);
 ?>
<div class="modal-dialog">
    <div class="modal-content abt-w3l">
							<div class="modal-header">
								<button type="button" class="close clo1" data-dismiss="modal">&times;</button>
									<form>
                    <div class="row  pad-row text-center" id="3c">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                  </div>

                 <div class="col-md-4 col-sm-4 col-xs-4">

                  
                      <h4>Detail Data</h4>
                     
                        <p align=>Nama : <?php echo $data['nama_lengkap'];?></br></p>
                        <p>Username : <?php echo $data['username'];?></br></p>
                        <p>Email : <?php echo $data['email'];?></p>
                     </div>
                   </div>
                   <form action="" method="post">
                   <table id="data" class="table table-bordered table-striped table-scalable">
                   <thead>
                    <tr>
                    <td width="2%">No</th>
                    <td align="center" width="40%">Pernyataan</th>
                    <td align="center" >Pilihan</th>
                    </tr>
                 </thead>
                    <tbody>
                <?php
                $query = mysql_query ("SELECT * FROM pernyataan");
               
                 if($query == false){
                  die ("Terjadi Kesalahan : ". mysql_error());
                  }
                $i=1;
                while ($ar = mysql_fetch_array ($query)){
                    $sql0 = "select * from pilihan";
                    $hasil0 = mysql_query($sql0);
                    $data0  = mysql_fetch_array($hasil0);

                ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $ar['pernyataan'];?></td>
            <td align=center valign=bottom> <select name="pilih[<?php echo $ar['id']; ?>]" required>
                <option value="" disabled selected>---pilih---</option>   
                <option value=SS> Sangat Setuju </option>
                <option value=S> Setuju </option>
                <option value=R> Ragu </option>
                <option value=TS> Tidak Setuju </option>
                <option value=STS> Sangat Tidak Setuju </option>
            </select></td>
            
            <?php echo"
           
          </tr>";
      $i++;
      }
              ?>
            </tbody>
            </table>
            <div class="form-group">
                            <input name="submit" type="submit" value="Submit" class="btn btn-success">
        	</form>

			</div>
						</div>
					</div>

             <?php //} ?>


            </div>


        </div>
    </div>
