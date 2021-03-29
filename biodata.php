<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<h1 align="center">BIODATA</h1>
	<table align="center" cellpadding="7" cellalign="center" width="500"> <!--Membuat tabel Biodata -->
		<tr>
			<td>Nama Lengkap</td> <!--Membuat kolom nama lengkap-->
			<td><?php echo "<td>".$_POST['nama']."</center><br>";?></td> <!--Mengisi nama menggunakan code php yang akan otomatis terisi pada dari form login nama-->
		</tr> 
		<tr>
			<td>NPM</td> <!--Membuat kolom NPM-->
			<td><?php echo "<td>".$_POST['npm']."</center><br>";?></td> <!--Mengisi NPM menggunakan code php yang akan otomatis terisi pada dari form login NPM-->
		</tr>
		<tr>
			<td>Email</td> <!--Membuat kolom email-->
			<td><?php echo "<td>".$_POST['email']."</center><br>";?></td> <!--Mengisi email menggunakan code php yang akan otomatis terisi pada dari form login email-->
		</tr>
		<tr>
			<td>Jenis Kelamin</td> <!--Membuat kolom jenis kelamin-->
			<td><?php echo "<td>".$_POST['jkelamin']."</center><br>";?></td> <!--Mengisi jenis kelamin menggunakan code php yang akan otomatis terisi pada dari form login jenis kelamin-->
		</tr>
		<tr>
			<td>TTL</td> <!--Membuat kolom tempat tanggal lahir-->
			<td><?php echo "<td>".$_POST['ttl']."</center><br>";?></td> <!--Mengisi tanggal lahir menggunakan code php yang akan otomatis terisi pada dari form login tanggal lahir-->
		</tr>
			<td>Agama</td> <!--Membuat kolom agama-->
			<td><?php echo "<td>".$_POST['agama']."</center><br>";?></td> <!--Mengisi agama menggunakan code php yang akan otomatis terisi pada dari form login agama-->
		</tr>
			<td>No. Telp</td> <!--Membuat kolom nomor telepon-->
			<td><?php echo "<td>".$_POST['telp']."</center><br>";?></td> <!--Mengisi nomor telepon menggunakan code php yang akan otomatis terisi pada dari form login no. telp-->
		</tr>
	</table>
</body>
</html>
