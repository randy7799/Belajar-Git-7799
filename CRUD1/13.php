<?php
include("koneksi.php");
$sql = "UPDATE biodata SET ";
$sql.= "nama='".$_POST['txtNama']."',alamat='".$_POST['txtAlamat']."' ";
$sql.= "WHERE id = ".$_POST['txtID'];
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "Data berhasil diubah.";
?>

<p>[ <a href="9.php">Tampil Data</a> ] </p>