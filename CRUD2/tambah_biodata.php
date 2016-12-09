<html>
	<head>
		<title>Tambah Data</title>
	</head>
<body>

	<?php
	include("koneksi.php");

	if (isset($_POST['txtNama']))
	{

		$sql = "INSERT INTO biodata(nama,alamat) ";
		$sql.= "VALUES ('".$_POST['txtNama']."','".$_POST['txtAlamat']."')";
		mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
		echo "Data berhasil ditambahkan.";
	}

	else
	{

	?>

	<form action="tambah_biodata.php" method="post">
		Nama : &nbsp;<input type="text" name="txtNama" />
		<br />
		Alamat : <textarea name="txtAlamat"></textarea>
		<br />
		<input type="submit" value="Submit" />
	</form>

	<?php
		}
	?>

	<p>[ <a href="tampil_biodata.php">Tampil Data</a> ] </p>
</body>
</html>