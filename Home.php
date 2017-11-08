<!DOCTYPE html>
<html>

<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="icon" href="img/tel.png">
	<title>E-Inventaris</title>
</head>
<body>

<!--navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container"><!--buat paging biar seimbang-->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle
		collapsed" data-toggle="collapse" data-target="#navbar">
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>	
			<span class ="icon-bar"></span>		
		</button>

			<a class="navbar-brand" href="index.php">E-Inventaris</a><!--navbar brand untuk membuat tulisan leibh besar-->	
		</div>
		<div id="navbar" class ="navbar-collapse collapse"><!--untuk menyesuaikn-->
			<ul class="nav navbar-nav"><!--buat tulisan di bawah berjejer-->
				<li><a href="#home">Home</a></li><!--tugas dari tag a adalah membuat sebuah tulisan yang bisa menjadi link-->
				<li><a href="#about">Book</a></li><!--ul adalah under list, li list yang di dalam underlist-->
				<li><a href="#program">About</a></li>
				<li><a href="#contact">Contact</a></li>
				<li><a href="signup.php">Registrasi
				<li><a href="masuk.php">Log In</a></li>
			</ul>
			
		</div>
	</div>	
</nav>

<!--Home-->
<div id="home">
	<img src="img/telkomuniversity2.png" class="img-responsive">
</div>

<!--about-->
<div id="about">
	<div class="container marketing">
		<div class ="row">

			<div class="col-lg-4">
				<img class ="img-circle" src="img/gedung.png"
				width="140" height="140">
				<h2>Gedung</h2>
				<p>Menyediakan peminjaman gedung dan runagan untuk peminjaman yang bisa dilakukan oleh mahasiswa dan dosen untuk keperluan akademik,ukm,dan lain-lain</p>
				<p><a class="btn btn-default" href="backpacker.php">Book &raquo;</a></p>
			</div>

			<div class ="col-lg-4">
				<img class ="img-circle" src="img/inventaris.png"
				width="140" height="140">
				<h2>Inventaris</h2>
				<p>Menyediakan berbagi peminjaman inventaris telkom university seperti kursi,meja dan lain yang bisa dilakukan oleh mahasiswa,dosen,staff Tel-U.</p>
				<p><a class="btn btn-default" href="camping.php">Book &raquo;</a></p>
			</div>

			<div class ="col-lg-4">
				<img class ="img-circle" src="img/mobil.png"
				width="140" height="140">
				<h2>Kendaraan Tel-u</h2>
				<p>Menyediakan berbagai peminjaman kendaraan yang bisa dilakukan oleh mahasiswa,dosen,dan staff Tel-U untuk keperluan akademik,ukm,dan lain-lain</p>
				<p><a class="btn btn-default" href="travel.php">Book &raquo;</a></p>
			</div>
		</div>
	</div>
</div>

<!--program-->
<div id="program">
	<div class="container">
		<hr class = "featurette-devider">
			<div class = "row featurette">
				<div class="col-lg-7">
					<h2 class ="featurette-heading">Mohammad Ashari<span class="text-muted"><br>Gretings from Rector</span></h2>
					<p class="lead">Welcome to a leading university with modern campus located in Bandung Indonesia. It is owned by PT Telekomunikasi Indonesia  Tbk,offering education and reserach systems on the bases of information and communiaction technology. Our vision is to be world class university toward a global entreneurial university. Currently,we have 7 faculty,28 programs of undergraduate studies. The student body is 23.000 including international students from countries such as Thailand,Korea,Germany,Uzbekistan,Italia etc. We have collaboration more than 30 countries in the world, for jointly program of double degree,research,exchange as well as short visit.</p>
				</div>
				<div class ="col-lg-5">
					<img class="img-circle" src="img/rektor.png">
				</div>
			</div>			
	
			
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("a").on('click',function(event){
			if (this.hash !== "") {
				event.preventDefault();
				var hash = this.hash;
				$('html, body').animate({
					scrollTop:$(hash).offset().top
				}, 800, function(){
					window.location.hash = hash;
				});
			}
		});
	});
</script>

</body>
</html>
