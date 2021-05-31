<!DOCTYPE html>
<html>
<head>
	<title>CRUD OOP</title>
</head>
<body>
	<?php 
		include "config.php";
		$db = new database();
	?>

	<h1>Data Mahasiswa Politeknik Caltex Riau</h1>

	<a href="input.php">Input Data</a>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<th>NIM</th>
			<th>Nama Lengkap</th>
			<th>Asal Daerah</th>
			<th>Program Studi</th>
			<th>Status</th>
            <th>Aksi</th>
		</tr>
		<?php
			$no = 1;
			foreach ($db->tampil_data() as $x) {
		?>
		<tr>
            <td><?php echo $x['nim'];?></td>
			<td><?php echo $x['nama_lengkap'];?></td>
			<td><?php echo $x['asal_daerah'];?></td>
			<td><?php echo $x['program_studi'];?></td>
            <td><?php echo $x['status'];?></td>
			<td>
				<a href="edit.php?nim=<?php echo $x['nim'];?>&aksi=edit">Edit</a>
				<a href="proses.php?nim=<?php echo $x['nim'];?>&aksi=hapus">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
