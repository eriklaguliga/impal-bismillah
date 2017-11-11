<html>
	<head>
		<title>Halaman Beranda</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		</head>
		<body>
				
				<div class="box-login">
				<font style="font-size:26px;color:#fff;">Silahkan Masuk</font>
					<form action="" method="post">
						<input type ="text" name="email" placeholder="Masukkan Email Anda" /><br>
						<input type ="password" name="pass" placeholder= "Masukkan Password Anda" /><br>
						<input type ="submit" name="masuk" value="Masuk" /><br>
					</form>
					<?php
						include "koneksi.php";
						if(isset($_POST['masuk'])){
							$cek = mysqli_query($conn,"SELECT *FROM user WHERE
							email = '".$_POST['email']."' AND password = '".$_POST['pass']."'");
							$hasil = mysqli_fetch_array($cek);
							$count = mysqli_num_rows($hasil);
							echo $count;
						}
					?>
				</div>
		</body>
</html>