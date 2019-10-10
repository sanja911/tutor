<!DOCTYPE html>
<?php
session_start();
include "../comp/koneksi.php";
if(isset($_SESSION['sukses'])){
 echo $_SESSION['sukses'];
 unset($_SESSION['sukses']);
}
if(isset($_SESSION['error'])){
 echo $_SESSION['error'];
 unset($_SESSION['error']);
}
if(!isset($_SESSION['username'])){
die("Anda belum login");//jika belum login jangan lanjut..
}

if($_SESSION['akses']!="Tutor"){
die("Anda bukan tutor");//jika bukan admin jangan lanjut
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dynamically Duplicating a form, by Tristan Denyer</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
<link href="../assets/css/datepicker3.css" rel="stylesheet">
<link href="../assets/css/styles.css" rel="stylesheet">
<link href="../assets/ckeditor/styles.css" rel="stylesheet">
<link href="../assets/css/dropzone.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="../assets/css/dropzone.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/select2.min.css"/>
    <style>    
      #wrapper { 
        width:595px;
        margin:0 auto;
      }
      legend {
        margin-top: 20px;
      }
      #attribution {
        font-size:12px;
        color:#999;
        padding:20px;
        margin:20px 0;
        border-top:1px solid #ccc;
      }
      #O_o { 
        text-align: center; 
        background: #33577b;
        color: #b4c9dd;
        border-bottom: 1px solid #294663;
      }
      #O_o a:link, #O_o a:visited {
        color: #b4c9dd;
        border-bottom: #b4c9dd;
        display: block;
        padding: 8px;
        text-decoration: none;
      }
      #O_o a:hover, #O_o a:active {
        color: #fff;
        border-bottom: #fff;
        text-decoration: none;
      }
      @media only screen and (max-width: 620px), only screen and (max-device-width: 620px) {
        #wrapper {
          width: 90%;
        }
        legend {
          font-size: 24px;
          font-weight: 500;
        }
      }
      </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/dropzone.js"></script>
    <script type="text/javascript">
    // if Google is down, it looks to local file...
    if (typeof jQuery == 'undefined') {
      document.write(unescape("%3Cscript src='../assets/js/jquery-1.10.2.min.js' type='text/javascript'%3E%3C/script%3E"));
    }
    </script>
    <script type="text/javascript" src="../assets/js/clone-form-td.js"></script>
    <script type="text/javascript" src="../assets/js/dropzone.js"></script>
    <script type="text/javascript">
      function add_row()
      {
        $rowno=$("#prestasi_table tr").length;
        $rowno=$rowno+1;
        $("#prestasi_table tr:last").
        after("<tr id='row"+$rowno+"'><td class='item_nama'><input type='text' name='nama[]' placeholder='Nama Prestasi' class='form-control'></td><td class='item_prestasi'><select name='prestasi[]' class='select_ttl form-control' id='prestasi1'><option value='' selected='selected' disabled='disabled'>Prestasi</option>  <option value='dalam negeri'>Dalam Negeri</option><option value='luar negeri'>Luar Negeri</option></select></td><td class='item_qualifikasi[]'><select name='qualifikasi[]' class='select_ttl form-control' id='qualifikasi1'><option value='' selected='selected' disabled='disabled'>Kualifikasi</option>  <option value='tersertifikasi'>Tersertifikasi</option><option value='non-sertifikasi'>Non-sertifikasi</option></select></td><td class='item_universitas'><select name='universitas[]' class='select_ttl form-control' id='univ1'><option value='' selected='selected' disabled='disabled'>Universitas</option>  <option value='dalam negeri'>Dalam Negeri</option><option value='luar negeri'>Luar Negeri</option></select></td><td class='item_lulusan'><select name='lulusan[]' class='select_ttl form-control' id='lulusan1'><option value='' selected='selected' disabled='disabled'>Lulusan</option>  <option value='S1'>S1</option><option value='S2'>S2</option><option value='S3'>S3</option></select></td><td><input type='button'class='btn btn-danger pull-right' value='Hapus' onclick=delete_row('row"+$rowno+"')></td></tr>");
      }
      function delete_row(rowno)
      {
        $('#'+rowno).remove();
      }
    </script>
    <script src="../assets/js/bootstrap.min.js"></script> <!-- only added as a smoke test for js conflicts -->
</head>

<body>
<?php
		$query  = "SELECT * FROM user where username='$_SESSION[username]'";
		$hasil  = mysql_query($query);
		$jumlah = mysql_fetch_assoc($hasil);
		$query1  = "SELECT * FROM kriteria where id_user='$jumlah[id_user]'";
		$hasil1  = mysql_query($query1);
		$jumlah1 = mysql_fetch_assoc($hasil1);
		?>
    <div id="ModalDel" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                <div class="panel panel-danger">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <div class="panel-heading">Danger Panel</div>
                </div>
                <div class="panel-body">
      						<p>Data Tidak Dapat Dihapus Tanpa Persetujuan Admin. Silahkan Hubungi Admin Untuk Menghapus Data Ini.</p>
      					</div>
      				</div>
            </div>
          </div>

      </div>
  </div>

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Halaman</span>Tutor</a>
				<ul class="nav navbar-top-links navbar-right">
					</a>
						
		</div><!-- /.container-fluid -->
	</nav><div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  		<div class="profile-sidebar">
  			<div class="profile-userpic">
  			<a href="#" data-toggle="modal" data-target="#ModalFoto"><img src="../comp/foto/<?php echo $jumlah['foto'];?>" class="img-responsive" alt="Ubah Foto Profil"></a>
  			</div>
  			<div class="profile-usertitle">
  				<div class="profile-usertitle-name"><?php echo $_SESSION['username'];?></div>
  				<div class="profile-usertitle-status"><span class="indicator label-success"></span>id : <?php echo $jumlah['id_user'];?></div>
  			</div>
  			<div class="clear"></div>
  		</div>
      <ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
      <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Data <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="data.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Mapel
					</a></li>
					<li><a class="" href="kelas.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Kelas
					</a></li>

				</ul>
			</li><li><a href="user.php"><em class="fa fa-cog">&nbsp;</em> Pengaturan</a></li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
       	</div><!--/.sidebar-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      <div class="row">
        <ol class="breadcrumb">
          <li><a href="#">
            <em class="fa fa-home"></em>
          </a></li>
          <li class="active">Pengaturan Akun</li>
        </ol>
      </div>
      <div class="panel panel-default">
      <div class="panel-heading">Lengkapi Data Anda</div>
      <div class="panel-body">
      <form action="edit.php"  enctype="multipart/form-data" method="post">
                  <div class="row">
                    <div class="col-md-6">
                  <div class="form-group">
                          <label class="bmd-label-floating">Nama Lengkap</label>
                          <input type="text" name="nama_lengkap" value="<?php echo $jumlah['nama_lengkap'];?>" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" name="email" value="<?php echo $jumlah['email'];?>" class="form-control">
                        </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                       <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" name="username" value="<?php echo $jumlah['username'];?>" class="form-control" disabled>
                        </div>
                      </div>
                        <div class="col-md-6">

                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" name="password" value="<?php echo $jumlah['password'];?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                       <div class="form-group">
                          <label class="bmd-label-floating">Awal Mengajar </label>
                          <input type="date" name="awal" value="<?php echo $jumlah1['awal']; ?>" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                       <div class="form-group">
                          <label class="bmd-label-floating">Terakhir Mengajar </label>
                          <input type="date" name="akhir" value="<?php echo $jumlah1['akhir']; ?>" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                       <div class="form-group">
                          <label class="bmd-label-floating">Tempat Lahir</label>
                          <input type="text" name="tempat_lahir" value="<?php echo $jumlah['tempat_lahir']; ?>" class="form-control" required>
                        </div>
                      </div>
                    <div class="col-md-6">
                       <div class="form-group">
                          <label>Tanggal Lahir</label>
                          <input type="date" name="tgl_lahir" value="<?php echo $jumlah['tgl_lahir']; ?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                       <div class="form-group">
                          <label>link bahan ajar yang pernah dibuat</label>
                          <input type="link" name="link_tutor" value="<?php echo $jumlah1['link']; ?>" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                       <div class="form-group">
                          <label>Alamat</label>
                          <textarea class="form-control" name="alamat"><?php echo $jumlah1['alamat']; ?></textarea>
                        </div>
                      </div>
                    </div>

                     
          </div>
                </div>
    <div class="panel panel-default" id="idf">
      <div class="panel-heading">Prestasi</div>
      <div class="panel-body">  
      <div class="row">
          <div class="col-md-6">
                  <div class="form-group">
                          <label class="bmd-label-floating">Nama Prestasi</label>
                          <input type="text" name="nama_pres" value="" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="bmd-label-floating">Tingkat Prestasi</label>
                          <select class="select_ttl form-control" name="prestasi" id="prestasi">
                           <option value="luar negeri">Luar Negeri</option>
                          <option value="dalam negeri">Dalam Negeri</option>
                        </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                      <div class="form-group">
                          <label class="bmd-label-floating">Kualifikasi</label>
                          <select class="select_ttl form-control" name="qualifikasi" id="qualifikasi">
                          <option value="tersertifikasi">Tersertifikasi</option>
                           <option value="non-sertifikasi">Non-sertifikasi</option>
                        </select>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
            
                  <div class="form-group">
                          <label class="bmd-label-floating">Nama Universitas</label>
                          <input type="text" name="nama_univ" value="" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-3">
                      <div class="form-group">
                          <label class="bmd-label-floating">Jenis Universitas</label>
                          <select class="select_ttl form-control" name="universitas" id="univ">
                           <option value="luar negeri">Luar Negeri</option>
                          <option value="dalam negeri">Dalam Negeri</option>
                        </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                      <div class="form-group">
                          <label class="bmd-label-floating">Lulusan</label>
                          <select class="select_ttl form-control" name="lulusan" id="lulusan1">
                           <option value="S1">S1</option>
                          <option value="S2">S2</option>
                          <option value="S3">S3</option>
                        </select>
                        </div>
                      </div>
                      </div>
                      <div class="col-md-4">
                <div class="form-group dropzone" id="my-awesome-dropzone"><label>Foto Sertifikat pengajar</label>
                <div class="fallback">
                <input type="file" name="file" class="form-control" />
                  </div>
                  </div>
                </div>
                <div class="col-md-4">
                <div class="form-group dropzone" id="my-awesome-dropzone"><label>Foto Ijazah</label>
                <div class="fallback">
                <input type="file" name="file1" class="form-control" />
                  </div>
                  </div>
                </div>
                <div class="col-md-4">
                <div class="form-group dropzone" id="my-awesome-dropzone"><label>Foto Sertifikat Prestasi</label>
                <div class="fallback">
                <input type="file" name="file2" class="form-control" />
                  </div>
                  </div>
                </div>
    <div class="form-group" align="center">
											<button type="submit" name="submit_row" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                        </div>

                  </form>
   
          </div>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
                <script src="../assets/js/jquery-2.1.4.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery-1.11.2.min.js"></script>
  <script src="../assets/js/select2.min.js"></script>
  <script src="../assets/js/bootstrap-datepicker.js"></script>
	<script src="../assets/js/custom.js"></script>
  <script>
  $(document).ready(function () {
  $("#prestasi").select2({
  width:'100%',
  placeholder: "Please Select"
  });
  $("#qualifikasi").select2({
  width:'100%',
  placeholder: "Please Select"
  });
  $("#univ").select2({
  width:'100%',
  placeholder: "Please Select"
  });
  $("#lulusan").select2({
  width:'100%',
  placeholder: "Please Select"
  });
  });
  </script>
  <script>
  $(document).ready(function () {
  $("#prestasi1").select2({
  width:'100%',
  placeholder: "Please Select"
  });
  $("#qualifikasi1").select2({
  width:'100%',
  placeholder: "Please Select"
  });
  $("#univ1").select2({
  width:'100%',
  placeholder: "Please Select"
  });
  $("#lulusan1").select2({
  width:'100%',
  placeholder: "Please Select"
  });
  });
  </script>
              
</body>
</html>
