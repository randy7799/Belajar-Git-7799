<html>
<head>
<title>Ubah Data</title>
</head>
<body>
<?php
include("koneksi.php");
$sql = "SELECT id,nama,alamat FROM biodata ";
$sql.= "WHERE id = ".$_GET['id'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
?>
<h2>Ubah Data</h2>
<form action="13.php" method="post">
Nama :&nbsp;
<input type="text" name="txtNama" value="<?php echo $data['nama'];
?>" />
<br />
Alamat :
<textarea name="txtAlamat"><?php echo $data['alamat']; ?></textarea>
<br />
<input type="hidden" name="txtID" value="<?php echo $data['id'];
?>" />
<input type="submit" value="Submit" />
</form>
</body>
</html>