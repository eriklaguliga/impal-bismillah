<html>
<head>
	<title>Hasil Login</title>
	<link rel="stylesheet" type="text/css" href="style/style.css"> 
</head>
<body>
	<header>
		<ul>
			<a href="#><li>Keluar</li></a>
		</ul>
	</header>
	
		<form action="proseslogin.php" method="post" name="form1">
		<table>
		<tr>
		<td>
			<?php
				if (isset($_POST['Login'])){
					$login = $_POST['username'];
					$pass = $_POST['password'];
					
					if ($login == "pian" && $pass == "pian"){
						echo "<h2>Login Berhasil</h2>";
					} else{
						echo "<h2>Login Gagal</h2>";
					}
				}
			?>
			</td>
			</tr>
		</table>
		</form>
	
</body>
</html>
