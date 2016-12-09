<?php

// update 9 dec 09:44
// by randy7799

	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	require_once('lib/m_nationality.php');
	
	$id = $_GET['a'];
	
	if(!is_numeric($id)){
		exit('Acess Forbiden');
	}
	
	$siswa = new Siswa();
	$data = $siswa -> readSiswa($id);
	
	$nation = new nationality();	
	$data_nation = $nation -> readAllNationality();
	
	if(empty($data)){
		exit('Siswa is not found');
	}	
	
	$dt = $data[0];
?>

<h1> Update Data Siswa </h1>
<form action="lib/editsiswa.php" method="post" enctype="multipart/form-data">

NIS : <br>
<input type="text" name="in_nis" readonly="true" value="<?php echo $dt['id_siswa']; ?>"><br>

Fullname : <br>
<input type="text" name="in_name" value="<?php echo $dt['full_name']; ?>" ><br>

Email : <br>
<input type="text" name="in_email" value="<?php echo $dt['email']; ?>" ><br>

Nationality : <br>
<select name="in_nation">
	<option value=""> --Choose Country-- </option>
	<?php foreach($data_nation as $n): ?>
	<?php $s =($dt['id_nationality'] == $n['id_nationality'])?"selected":""?>
	<option value="<?php echo $n['id_nationality']?>" <?php echo $s ?>>
		<?php echo $n['nationality']?>
	</option>
	<?php endforeach?>
</select><br>
Foto: <input type="file" name="in_foto" /><br />
	<?php if(!Empty($dt['foto'])):?>
		<img src="<?php echo $dt['foto']?>" width="100" />
	<?php endif?>
<input type="submit" name="kirim" value="simpan">
</form>