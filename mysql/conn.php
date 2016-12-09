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

/*$fdata = array();
while($row = mysql_fetch_array($data, MYSQL_ASSOC)){
	$fdata[] = $row;
}
print '<pre>';
print_r($fdata);
print '<pre>';
*/

echo"
<table border=1>

<tr>
	<td>No Siswa</td>
	<td>Nama Siswa</td>
	<td>Asal Siswa</td>
</tr>
";

while($fdata = mysql_fetch_array($data)){
	
	echo"
<tr>
	
	<td>".$fdata['id_siswa']."</td>
	<td>".$fdata['full_name']."</td>
	<td>".$fdata['nationality']."</td>
</tr>
";
}
echo "</table> ";
?>