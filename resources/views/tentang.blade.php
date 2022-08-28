<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Perpustakaannya SMK Negeri 65 Jakarta, Ayo mulai membaca!" />
    <meta name="robots" content="index, nofollow">
    <meta property="og:title" content="VinLibrary">
    <meta property="og:url" content="https://fromwhere.000webhostapp.com/">
    <meta property="og:description" content="Perpustakaannya SMK Negeri 65 Jakarta, Ayo mulai membaca!">
    <meta property="og:image" content="https://fromwhere.000webhostapp.com/bg10.png">
    <meta content="Perpustakaan SMK Negeri 65 Jakarta" name="keywords"/>
	<title>VinLibrary | Tentang</title>
	<link rel="stylesheet" href="css/tentang.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- <script>
		const cocok = window.matchMedia("(max-width: 1050px)");
		if(cocok.matches) {
			document.location.href = 'http://localhost/buatLomba/index3.php';
		}
	</script> -->
</head>
<body>

	<!-- NAVIGATION & HEADER -->

	@auth
		
		<div class="account">
			<img src="iconLogo/icon.png" alt="VinLibrary" onclick="return document.location.href = 'http://vinlibrary.test/'">
			<div>
				<button onclick="return document.location.href = 'http://vinlibrary.test/dashboard'"><i class="fa-solid fa-user-check"></i></button>
				<form action="/logout" method="POSt">
					@csrf
					<button type="submit"><i class="fa-solid fa-right-from-bracket"></i></button>
				</form>
			</div>
		</div>

		<nav>
			<a href="home"><i class="fa-solid fa-house-circle-check"></i></a>
			<a href="read"><i class="fa-brands fa-readme"></i></a>
			<p><i class="fa-solid fa-circle-info"></i></p>
			<div>
				<input id="temukan" type="text" placeholder="cari buku disini...">
				<button>
					<i class="fas fa-search"></i>
				</button>
			</div>
		</nav>

	@else

		<div class="account">
			<h1 class="logo"><i>Vin</i><span>Library</span></h1>
			<div>
				<button onclick="document.location.href = 'http://vinlibrary.test/login'">Masuk</button>
				<button onclick="document.location.href = '/register'">Daftar</button>
			</div>
		</div>

		<nav>
			<a href="home">Beranda</a>
			<a href="read">Baca</a>
			<p>Tentang</p>
			<div>
				<input id="temukan" type="text" placeholder="cari buku disini...">
				<button>
					<i class="fas fa-search"></i>
				</button>
			</div>
		</nav>

	@endauth

	<script>

		$(document).ready(function(){
			$('nav div button').click(function(){
				var cari = document.getElementById("temukan").value;
				document.location.href = 'http://vinlibrary.test/read/' + cari + '/search';
			});
		});

	</script>

	<!-- TENTANG -->

	<h1 class="jSejarah"><u>Sejarah VinLibrary</u></h1>

	<div class="desc">
		<p>VinLibrary adalah project perdana kami dalam bentuk Digital Library. VinLibrary didirikan oleh tiga orang, yaitu Vyrdi Firmansyah, M. Irza Arivin Ngibadi, dan Nursuci Shabilla Putri pada tanggal 08 Oktober 2021, di SMK Negeri 65 Jakarta. VinLibrary dibentuk dengan tujuan pendidikan, agar dapat meningkatkan minat dan semangat membaca setiap orang.</p>
		<p>VinLibrary bisa menjadi wadah bagi masyarakat umum untuk membuat suatu karya dalam bentuk buku online dan kami pun menerima akses berupa sumbangan buku dalam bentuk PDF atau semacamnya. Tak lupa juga kami akan mengapresiasikan karya-karya tersebut dan akan merekomendasikan kepada pembaca.</p>
		<p>Berdirinya VinLibrary membuktikan bahwasanya kami siswa & siswi jurusan Rekayasa Perangkat Lunak (RPL) dari SMK Negeri 65 Jakarta mampu bersaing dalam membuat Website. VinLibrary memiliki arti yang berharga bagi kami, karena setiap hurufnya adalah inisial dari nama kami dan dibuat pada saat kami ingin membuat website ini.</p>
	</div>

	<h1 class="dev"><u>Pengembang VinLibrary</u></h1>

	<div class="develop">
		<div class="box" data-aos="fade-up-right" data-aos-duration="800">
			<img src="img/vyrdiii.png" alt="">
			<div class="profil">
				<h2>Vyrdi Firmansyah</h2>
				<h2>~ Back-End Developer</h2>
				<i class="far fa-envelope"> vyrdi.firmansyah@gmail.com</i>
				<br>
				<i class="fab fa-instagram"> @budi_1234567</i>
				<br>
				<i class="fab fa-whatsapp"> +62 896-0947-3704</i>
			</div>
		</div>
		<div class="box" data-aos="fade-up" data-aos-duration="800">
			<img src="img/nursuci.jpeg" alt="">
			<div class="profil">
				<h2>Nursuci Shabilla Putri</h2>
				<h2>~ Content Creator</h2>
				<i class="far fa-envelope"> nursucishbll2004@gmail.com</i>
				<br>
				<i class="fab fa-instagram"> @nrsuch_</i>
				<br>
				<i class="fab fa-whatsapp"> +62 856-9300-1140</i>
			</div>
		</div>
		<div class="box" data-aos="fade-up-left" data-aos-duration="800">
			<img src="img/irzaaa.png" alt="">
			<div class="profil">
				<h2>M. Irza Arivin Ngibadi</h2>
				<h2>~ Front-End Developer</h2>
				<i class="far fa-envelope"> irzaarivin2005@gmail.com</i>
				<br>
				<i class="fab fa-instagram"> @irzaarivin</i>
				<br>
				<i class="fab fa-whatsapp"> +62 813-8886-8788</i>
			</div>
		</div>
	</div>
	
	<!-- FOOTER -->

	<div class="footer">
		<div class="contact">
			<a target="_blank" href="https://api.whatsapp.com/send?phone=6289609473704&text=Hallo%20Vyrdi%20Firmansyah...">
				<i class="fab fa-whatsapp"></i>
			</a>

			<a target="_blank" href="https://instagram.com/budi_1234567?r=nametag">
				<i class="fab fa-instagram"></i>
			</a>

			<a class="feedback" href="feedback.php" target="_blank">
			 	<i class="fas fa-comment-dots"></i>
			</a>

			<a target="_blank" href="https://t.me/irzaarivinbot">
				<i class="fab fa-telegram"></i>
			</a>

			<a target="_blank" href="mailto:irzaarivin2005@gmail.com">
				<i class="fas fa-envelope"></i>
			</a>
		</div>
		<p><b><strong>Copyright © 2021</strong></b> VinLibrary. All Rights Reserved</p>
	</div>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>
	<!-- <script>
		const cocok = window.matchMedia("(max-width: 1050px)");
		if(cocok.matches) {
			document.location.href = 'http://localhost/buatLomba/index3.php';
		}
	</script> -->
</body>
</html>