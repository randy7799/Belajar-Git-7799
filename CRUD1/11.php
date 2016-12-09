<?php
include("koneksi.php");
$sql = "INSERT INTO biodata(nama,alamat) ";
$sql.= "VALUES ('".$_POST['txtNama']."','".$_POST['txtAlamat']."')";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "Data berhasil ditambahkan.";
?>

<p>[ <a href="9.php">Tampil Data</a> ] </p>