<?php
  include "koneksi.php";
	$id=$_GET['id'];
  $sql1 = "select * from prestasi INNER JOIN user ON prestasi.id_user=user.id_user where prestasi.id='$id'";
	$hasil1 = mysql_query($sql1);
  $data1  = mysql_fetch_array($hasil1);
  $jkel="Bapak";
  if ($data1['jenis_kel']=="P"){
  $jkel="Ibu";
  }
?>

<div class="modal-dialog">
    <div class="modal-content abt-w3l">
							<div class="modal-header">
								<button type="button" class="close clo1" data-dismiss="modal">&times;</button>
									
          <div class="panel panel-default ">
					<div class="panel-heading">
          Prestasi <?php echo $data1['nama_lengkap'];?>
						
							</li>
						</ul>
					</div>
					<div class="panel-body timeline-container">
						<ul class="timeline">
							<li>
								<div class="timeline-badge"><i class="glyphicon glyphicon-pushpin"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Tentang <?php echo $data1['nama_lengkap']; ?> (<?php echo $data1['email'] ?>)</h4>
									</div>
									<div class="timeline-body">
										<p><?php echo $jkel; ?> <?php echo $data1['nama_lengkap'];?>, lahir di <?php echo $data1['tempat_lahir'];?> pada tanggal <?php echo $data1['tgl_lahir'] ?></p>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-badge primary"><i class="glyphicon glyphicon-link"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Prestasi</h4>
									</div>
									<div class="timeline-body">
                    <p>Jenis Prestasi : <?php echo $data1['prestasi']; ?>
                  <br> Nama Prestasi  : <?php echo $data1['nama_pres'];?>
                  <br> Lulusan        : <?php echo $data1['lulusan'];?> <?php echo $data1['nama_univ']; ?> (<?php echo $data1['universitas'] ;?>)
                  <br> Jenis Kualifikasi : <?php echo $data1['qualifikasi'] ;?></p>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-badge"><i class="glyphicon glyphicon-camera"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Sertifikat Pengajar</h4>
									</div>
									<div class="timeline-body">
										<img src="../comp/sertifikat/<?php echo $data1['file'];?>" class="img-responsive" alt="">
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-badge"><i class="glyphicon glyphicon-camera"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Foto Ijazah</h4>
									</div>
									<div class="timeline-body">
										<img src="../comp/sertifikat/<?php echo $data1['file1'];?>" class="img-responsive" alt="">
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-badge"><i class="glyphicon glyphicon-camera"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Sertifikat Prestasi</h4>
									</div>
									<div class="timeline-body">
										<img src="../comp/sertifikat/<?php echo $data1['file2'];?>" class="img-responsive" alt="">
									</div>
								</div>
							</li>
												</ul>
					</div>
				</div>
			</div>
						</div>
					</div>


            </div>


        </div>
    </div>
