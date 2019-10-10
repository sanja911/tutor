<html>
<head>
<title>Form Dinamis</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
<script language="javascript">
   function tambahPemain() {
     var id = document.getElementById("id").value;
     var inputbaru;
     inputbaru="<p id='kolombaru" + id + "'><input type='text' size='40' name='namapemain[]' placeholder='Masukkan nama pemain' /> <a href='#' onclick='hapusPemain("#kolombaru" + id + ""); return false;'>Hapus</a></p>";
     $("#pemain").append(inputbaru);
     idf = (idf-1) + 2;
     document.getElementById("id").value = id;
   }
   function hapusPemain(id) {
     $(id).remove();
   }
</script>
</head>
<body>
<div id="container">
  <center>
<h1>Contoh Form Dinamis menggunakan Jquery</h1>
<form method="post" action="simpan.php">
   <input id="id" value="1" type="hidden" />
   <p> Nama Club: <input name="nama" type="text" id="namaklub" size="40"> </p>
   <button type="button" onclick="tambahPemain(); return false;">Tambah Pemain</button>
   <div id="pemain"></div>
   <button type="submit">Simpan</button>
  </form>
  </center>
</div>
</body>
</html>