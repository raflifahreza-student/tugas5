<!DOCTYPE html>
<html>
<head>
	<title> Form Login </title>
</head>
<body>
	<form method="POST" action="biodata.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="130">Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="130">NPM</td>
				<td><input type="text" name="npm"></td>
			</tr>
			<tr>
				<td width="130">Jenis Kelamin</td>
				<td><input type="text" name="jkelamin"></td>
			</tr>
			<tr>
				<td width="130">TTL</td>
				<td><input type="text" name="ttl"></td>
			</tr>
			<tr>
				<td width="130">Agama</td>
				<td><input type="text" name="agama"></td>
			</tr>
			<tr>
				<td width="130">No. Telp</td>
				<td><input type="text" name="telp"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
