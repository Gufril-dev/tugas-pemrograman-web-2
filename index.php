<!DOCTYPE html>
<html>
<head>
<title>Tambah Data </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h1><center>Tambah Data Mahasiswa</center></h1>
<?php
include 'koneksi.php';
?>
<br/>
<button type="button" class="btn btn-outline-primary"><a href="tambahdata.php" >Tambah Data</a></button>
<br/><br/>
<table class="table table-striped" border="1" cellpadding="10">
<tr>
<th>No</th>
<th>NPM</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Jurusan</th>
<th>Kelas</th>
<th>Photo</th>
<th>Action</th>
</tr>
<?php
$no = 1;
$data = mysqli_query($koneksi,"select * from tb_mahasiswa");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $d['NPM']; ?></td>
<td><?php echo $d['Nama']; ?></td>
<td>
<?php
if($d['Jenis_Kelamin']=='L') echo 'Laki-laki';
elseif($d['Jenis_Kelamin']=='P') echo 'Perempuan';
?>
</td>
<td><?php echo $d['Jurusan']; ?></td>
<td><?php echo $d['Kelas']; ?></td>
<td>
<img src="<?php echo "file/".$d['Photo']; ?>" width="100"
height="130" >
</td>
<td>
<button type="button" class="btn btn-info"><a href="edit_datamahasiswa.php?id=<?php echo $d['NPM'];?>">Edit</a></button>
<button type="button" class="btn btn-danger"><a href="proses_hapus.php?id=<?php echo $d['NPM'];?>"onclick="return confrim('Anda yakin ingin menghapus data ini? \n<?php 
echo$d['NPM']; ?>')">Hapus</a></button>
</td>
</tr>
<?php } ?>
</table>
<br/>
<?php
echo "Total data : ". mysqli_num_rows($data)." Mahasiswa";
?>
</body>
</html>

<style type=text/css>
.table{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.button{
    color: gray;
}
</style>
