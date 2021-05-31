<!DOCTYPE html>
<html>
<head>
	<title>INPUT</title>
</head>
<body>
	<form action="proses.php?aksi=tambah" method="post">
		<table>
            <tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
            <tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama_lengkap"></td>
			</tr>
			<tr>
				<td>Asal Daerah</td>
				<td><input type="text" name="asal_daerah"></td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td><input type="text" name="program_studi"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="Simpan"></td>
			</tr>
		</table>		
	</form>
</body>
</html>