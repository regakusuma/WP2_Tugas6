<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input Data Siswa</title>
	<link rel="stylesheet" href="http://localhost/Latihan5/assets/css/styleinput.css">
</head>
<body>
<div class="container">
<center>
		<h1>Form Input Data Siswa</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url().'MyController/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nis</td>
				<td><input type="text" class="text" name="nis"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" class="text" name="nama"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td><input type="text" class="text" name="kelas"></td>
			</tr>
            <tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" class="date" name="tanggallahir"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" class="text" name="alamat"></td>
			</tr>
            <tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" class="radio" name="jeniskelamin" value='pria'>pria
				<input type="radio" class="radio" name="jeniskelamin" value='perempuan'>perempuan
			</td>
                
            </tr>
			<tr>
				<td>Agama</td>
				<td>
                <!-- tag select jangan lupa dikasih name biar ga bingung html nya\ -->
                    <select name="agama" class="select">
                        <option name="agama" value="islam">islam</option>
                        <option name="agama" value="kristen">kristen</option>
                        <option name="agama" value="protestan">protestan</option>
                        <option name="agama" value="katolik">katolik</option>
                        <option name="agama" value="hindu">hindu</option>
                        <option name="agama" value="budha">budha</option>
                        <option name="agama" value="khonghucu">khonghucu</option>
                    </select>
                </td>
			</tr>
		</table>
		<center>
		<input type="submit" value="Tambah" class="submit"></td>
		</center>
	</form>	
	</div>
</body>
</html>