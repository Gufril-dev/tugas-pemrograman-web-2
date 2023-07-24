 <!DOCTYPE html>
<html>
<head>
<title>DATA MAHASISWA</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><center>
<h2>DATA MAHASISWA</h2>
<br/>
<button type="button" class="btn btn-info"><a href="index.php">KEMBALI</a></button>
<br/>
<br/>
<h3>EDIT DATA MAHASISWA</h3>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from tb_mahasiswa where 
NPM='$id'");
while($d = mysqli_fetch_array($data)){
?>
<form method="post" action="proses_update.php">
<table>
<tr>
<td>NPM</td>
<td>
<input type="text" name="npm" value="<?php echo 
$d['NPM']; ?>">
</td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" value="<?php echo 
$d['Nama']; ?>"></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>
<input type="radio" name="jekel" value="L" <?php
if($d['Jenis_Kelamin']=='L') echo 'checked'?>>Laki-laki
<input type="radio" name="jekel" value="P" <?php
if($d['Jenis_Kelamin']=='P') echo 'checked'?>>Perempuan
</td>
</tr>
<tr>
<td>Jurusan</td>
<td>
<Select name=jurusan>
<option value="SI" <?php if($d['Jurusan']=="SI") echo 
'selected="selected"'; ?> >SI</option>
<option value="TI" <?php if($d['jurusan']=="TI") echo 
'selected="selected"'; ?> >TI</option>
<option value="SIA" <?php if($d['jurusan']=="SIA") echo 
'selected="selected"'; ?> >SIA</option>
</select>
</td>
</tr>
<tr>
<td>Kelas</td>
<td><input type="text" name="kelas" value="<?php echo 
$d['Kelas']; ?>"></td>
</tr>
<tr>
<td>Photo</td>
<td><input type="file" name="file"> <img src="file/<?php echo 
$d['Photo']; ?>" style="width: 100px;float: left;margin-bottom: 5px;">
<br/><i style="float: left;font-size: 11px;color: 
red">Abaikan jika tidak merubah photo</i>
</td>
</tr>
<tr>
<td></td>
<td>
<br/><br/>
<input name="BtnSimpan" type="submit" value="SIMPAN">
<input name="BtnBatal" type="reset" value="BATAL" />
</td>
</tr>
</table>
</form>
<?php
}
?>
</center></body>
</html>
