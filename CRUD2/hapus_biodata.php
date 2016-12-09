<?php
include("koneksi.php");
$sql = "DELETE FROM biodata WHERE id = ".$_GET['id'];
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
echo "Data berhasil dihapus.";
?>

<p>[ <a href="tampil_biodata.php">Tampil Data</a> ] </p>