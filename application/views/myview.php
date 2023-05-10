<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data siswa</title>
	<link rel="stylesheet" href="http://localhost/Latihan5/assets/css/styleview.css">
</head>
<body>
<center><h1>DATA SISWA</h1></center>
	<center>
	<div class="add">	
	<?php echo anchor(base_url().'MyController/tambah_data','Tambahkan data'); ?></center>
	</div>
	<table style="margin:20px auto;" border="1">
		<tr>
            <th>No.</th>
			<th>Nis</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
            <th>Jenis kelamin</th>
            <th>Agama</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
            <td><?php echo $u->nis ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->kelas ?></td>
			<td><?php echo $u->tanggallahir ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->jeniskelamin ?></td>
            <td><?php echo $u->agama ?></td>
			
			

            <!-- <td>
			      <?php echo anchor('crud/edit/'.$u->nis,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->nis,'Hapus'); ?>
			</td> -->
		</tr>
		<?php } ?>
	</table>
</body>
</html>