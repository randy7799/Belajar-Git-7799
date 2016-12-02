<?php

	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	require_once('lib/age.php');
	
	$siswa = new Siswa();
	$data = $siswa -> readAllSiswa();
	$age = new Age();

	$i = 1;
	
	
?>	
<table border=1>

	<tr>
		<th> NO </th>
		<th>ID SISWA</th>
		<th>FULL NAME</th>
		<th>Date Of Birth</th>
		<th>Age</th>
		<th>NATIONALITY</th>

	</tr>

<?php foreach ($data as $a):?>
<?php $umur = date('Y-m-d') - $a['date_ob'];?>
	<tr>
		<td><?php echo $i;$i++ ?></td>
		<td><?php echo $a['id_siswa']; ?></td>
		<td><?php echo $a['full_name']; ?></td>
		<td><?php echo $a['date_ob']; ?></td>
		<td>
			<?php 
			 echo $umur;
			 ?>
		</td>
		<td><?php echo $a['nationality']; ?></td>
		<td> <a href = "dsiswa.php?a=<?php echo $a['id_siswa']; ?>"> Detail </a></td>
		<td> <a href = "usiswa.php?a=<?php echo $a['id_siswa']; ?>"> Update </a></td>
		<td> <a href = "delsiswa.php?a=<?php echo $a['id_siswa']; ?>"> Delete </a></td>
	</tr>
<?php endforeach?>

</table>

