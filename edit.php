<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>
	<?php
		include "config.php";
		$db = new database();
	?>

	<form action="proses.php?aksi=update" method="post">
		<?php
			foreach ($db->edit($_GET['nim']) as $x) {
		?>
		<input type="hidden" name="nim" value="<?php echo $x['nim']?>">
		<table>
            <tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama_lengkap" value="<?php echo $x['nama_lengkap']?>"></td>
			</tr>
			<tr>
				<td>Asal Daerah</td>
				<td><input type="text" name="asal_daerah" value="<?php echo $x['asal_daerah']?>"></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td><input type="text" name="program_studi" value="<?php echo $x['program_studi']?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?php echo $x['status']?>"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		<?php } ?>
	</form>
</body>
</html>