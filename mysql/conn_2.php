<?php

$conn = mysql_pconnect('localhost','root','')
or die('ora konek');

echo 'berhasil konek & ';

mysql_select_db('pwl_7799') or die ('database ora ono');

echo'<br>';
echo'berhasil menggunakan database';
echo'<br>';

$query = "Select id_siswa, full_name, nationality from siswa s join nationality n on s.id_nationality = n.id_nationality";

$data = mysql_query($query) or die('Erorr Query: '.mysql_error());

$fdata = array();
while($row = mysql_fetch_array($data, MYSQL_ASSOC)){
	$fdata[] = $row;
}
/*
print '<pre>';
print_r($fdata);
print '<pre>';
*/
?>

<table border=1>

<tr>
	<th>No Siswa</th>
	<th>Nama Siswa</th>
	<th>Asal Siswa</th>
</tr>

<?php foreach ($fdata as $d) {?>
<tr>
	<td><?php echo $d['id_siswa']; ?></td>
	<td><?php echo $d['full_name']; ?></td>
	<td><?php echo $d['nationality']; ?></td>
</tr>
<?php } ?>

</table>



