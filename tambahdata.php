<!DOCTYPE html>
	<html>
	<head>
		<title>Tambah Data</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	</head>
	<body><center>
		<h1>Tambah Data Mahasiswa</h1>
		<br/>
		<button type="button" class="btn btn-outline-primary"><a href="index.php">Data Mahasiswa</a></button>
		<br/><br/>
		<form action="prosestambah.php" method="post" 
		enctype="multipart/form-data">
			<table width="400">
				<tr>
					<td>NPM</td>
					<td><input type="text" name="npm"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<input type="radio" value=L name="jekel">Laki-laki
						<input type="radio" value=P name="jekel">Perempuan
					</td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>
						<Select name=jurusan>
						<option value=SI>Sistem Informasi</option>
						<option value=SIA>Sistem Informasi Akuntansi</option>
						<option value=TI>Teknik Informatika</option>
					</Select>
					</td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="kelas"></td>
				</tr>
				<tr>
					<td>Photo</td>
					<td><input type="file" name="file"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<br/><br/>
						<input name="save" type="submit" value="Simpan">
						<input name="batal" type="reset" value="Batal" />
					</td>
				</tr>
			</table>
		</form>
	</center></body>
	</html>