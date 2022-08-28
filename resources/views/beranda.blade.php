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
	<title>VinLibrary | Beranda</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
	<link rel="shortcut icon" href="favicon.ico">
	<script src="js/jQuery/jquery-3.6.0.min.js"></script>
	<script src="js/three.r119.min.js"></script>
	<script src="js/vanta.birds.min.js"></script>
</head>
<body id="background">

	
	<!-- NAVIGATION & HEADER -->


	@auth <!-- TAMPILAN NAVIGASI KALAU USER LOGIN -->
		
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
			<p><i class="fa-solid fa-house-circle-check"></i></p>
			<a href="read"><i class="fa-brands fa-readme"></i></a>
			<a href="about"><i class="fa-solid fa-circle-info"></i></a>
			<div>
				<input id="temukan" type="text" placeholder="cari buku disini...">
				<button>
					<i class="fas fa-search"></i>
				</button>
			</div>
		</nav>

	@else <!-- TAMPILAN NAVIGASI KALAU BELUM ADA USER YANG LOGIN -->

		<div class="account">
			<h1 class="logo"><i>Vin</i><span>Library</span></h1>
			<div>
				<button onclick="document.location.href = 'http://vinlibrary.test/login'">Masuk</button>
				<button onclick="document.location.href = '/register'">Daftar</button>
			</div>
		</div>

		<nav>
			<p>Beranda</p>
			<a href="read">Baca</a>
			<a href="about">Tentang</a>
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

	<!-- INFORMASI WEBSITE -->

	<div class="informasi">
		<div class="penjelasan">
			<p class="kwkwkw"><span>SETIAP</span> orang memiliki mimpi, dan mereka selalu berharap mimpinya dapat digapai. Mimpi yang dimaksud disini ialah hasrat yang akan menggerakkan manusia untuk mewujudkan apa yang diinginkannya. Salah satu cara untuk menggapai mimpinya tersebut adalah dengan <a target="_blank" href="https://id.wikipedia.org/wiki/Membaca">membaca</a> buku pengetahuan. <i>VinLibrary</i> hadir dengan berbagai macam jenis buku yang akan membuat pembacanya dapat menemukan apa yang ingin digapainya. <i>VinLibrary</i> sangat memprioritaskan apa yang menjadi kebutuhan penggunanya. Jadi, </p>
			<h2>Selamat Membaca, Peraih Mimpi...</h2>
		</div>
		<img src="img/bg11.png" alt="Illustration">
	</div>


	<!-- BUKU REKOMENDASI -->


	<div class="book">

		<h2>Rekomendasi Buku Belajar :</h2>
		<div class="buku">

			@foreach($fiksi as $bukuPelajaran)

				<a href="http://vinlibrary.test/read/{{ $bukuPelajaran->slug }}">
					<img src="{{ $bukuPelajaran->thumb }}" alt="{{ $bukuPelajaran->judul }}">
					<p>{{ $bukuPelajaran->judul }}</p>
				</a>

			@endforeach

		</div>

		<h2>Rekomendasi Buku Fiksi :</h2>
		<div class="buku">

			@foreach($fiksi as $bukuFiksi)

				<a href="http://vinlibrary.test/read/{{ $bukuFiksi->slug }}">
					<img src="{{ $bukuFiksi->thumb }}" alt="{{ $bukuFiksi->judul }}">
					<p>{{ $bukuFiksi->judul }}</p>
				</a>

			@endforeach

		</div>

		<h2>Rekomendasi Buku Non-Fiksi :</h2>
		<div class="buku">

			@foreach($fiksi as $bukuFiksi)

				<a href="http://vinlibrary.test/read/{{ $bukuFiksi->slug }}">
					<img src="{{ $bukuFiksi->thumb }}" alt="{{ $bukuFiksi->judul }}">
					<p>{{ $bukuFiksi->judul }}</p>
				</a>

			@endforeach

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

	<!-- JAVASCRIPT -->

	<!-- <script>
		const cocok = window.matchMedia("(max-width: 1050px)");
		if(cocok.matches) {
			document.getElementsByTagName('body')[0].style.diplay = 'none';
			alert("Maaf, Web ini sementara hanya tersedia di desktop");
			prompt("Silahkan masukan tanggapan anda atas ketidaknyamanan ini :");
			alert("Terima Kasih");
			document.location.href = 'https://www.smkn65jkt.sch.id';
		}
	</script> -->
	{{-- <script>
		VANTA.BIRDS({
			el: "#background",
			mouseControls: true,
			touchControls: true,
			gyroControls: true,
			backgroundColor: 0x69a8ff,
			backgroundAlpha: 1.00,
			color1: 0x281a93,
			color2: 0x23a3c5,
			colorMode: "varianceGradient",
			quantity: 5.00,
			birdSize: 1.00,
			wingSpan: 36.00,
			speedLimit: 8.00,
			separation: 20.00,
			alignment: 20.00,
			cohesion: 20.00,
			minHeight: 200.00,
			minWidth: 200.00,
			scale: 1.00,
			scaleMobile: 1.00
		})
	</script> --}}
</body>
</html>