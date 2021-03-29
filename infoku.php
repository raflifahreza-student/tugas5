<html>
<head>
	<title>History Login</title>
</head>
<body>
	<!--Untuk tugas ke 2 saya tambahkan code php halaman redirect jika nama dan email tidak terisi maka akan menuju ke form kosong-->
	<?php
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	if ($nama == "" and $email == ""){
		header("Location: kosong.php");
	} elseif($nama == ""){
    	header("Location: kosong.php");
	} elseif ($email == "") {
    	header("Location: kosong.php");
	} 
	?>
	<h1 align="center">HISTORY LOGIN</h1>
	<table align="center" cellpadding="7" cellalign="center" width="500"> <!--Membuat tabel history login -->
		<tr>
			<td>Nama</td> <!--Membuat kolom nama-->
			<td><?php echo "<td>".$_POST['nama']."</center><br>";?></td> <!--Mengisi nama menggunakan code php yang akan otomatis terisi pada dari form login nama-->
		</tr> 
		<tr>
			<td>Email</td> <!--Membuat kolom email-->
			<td><?php echo "<td>".$_POST['email']."</center><br>";?></td> <!--Mengisi email menggunakan code php yang akan otomatis terisi pada dari form login email-->
		</tr>
		<tr>
			<td>Pukul</td> <!--Membuat kolom pukul-->
			<td><?php echo "<td>".date("H:i:s A");?></td> <!--Mengisi kolom pukul / jam  menggunakan code php date yang akan otomatis terisi jam, menit, dettik, dan AM atau PM-->
		</tr>
		<tr>
			<td>Hari</td> <!--Membuat kolom hari-->
			<td><?php echo "<td>".date("D");?></td> <!--Mengisi kolom hari menggunakan code php date yang akan otomatis terisi Hari saat ini-->
		</tr>
		<tr>
			<td>Tanggal Login</td> <!--Membuat kolom tanggal login-->
			<td><?php echo "<td>".date("d M Y");?></td> <!--Mengisi kolom tanggal login saat ini  menggunakan code php date yang akan otomatis terisi Tanggal saat ini-->
		</tr>
		<tr>
			<td>Setelah Login</td> <!--Membuat setelah login-->
			<td><?php echo "<td>".date("d M Y");?></td> <!--Mengisi kolom setelah login saat ini  menggunakan code php date yang akan otomatis terisi Tanggal saat ini-->
		</tr>
	</table>
</body>
</body>
</html>
