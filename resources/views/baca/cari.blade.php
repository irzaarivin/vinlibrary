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
	<title>VinLibrary | Cari</title>
	<link rel="stylesheet" href="../../css/baca.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
	<link rel="shortcut icon" href="../../favicon.ico">
	<link rel="stylesheet" href="../../js/slick-1.8.1/slick/slick.css">
	<script src="../../js/jQuery/jquery-3.6.0.min.js"></script>
    <script src="../../js/slick-1.8.1/slick/slick.min.js"></script>
</head>
<body>

	<!-- NAVIGATION & HEADER -->
		
	<div class="account">
		<img src="../../iconLogo/icon.png" alt="VinLibrary" onclick="return document.location.href = 'http://vinlibrary.test/'">
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
		<p onclick="return document.location.href = 'http://vinlibrary.test/read';"><i class="fa-brands fa-readme"></i></p>
		<a href="about"><i class="fa-solid fa-circle-info"></i></a>
		<div>
			<input id="temukan" type="text" placeholder="cari buku disini..." required>
			<button type="submit" name="submit">
				<i class="fas fa-search"></i>
			</button>
		</div>
	</nav>

	<script>

		$(document).ready(function(){
			$('nav div button').click(function(){
				var cari = document.getElementById("temukan").value;
				document.location.href = 'http://vinlibrary.test/read/' + cari + '/search';
			});
		});

	</script>

	<!-- PERPUSTAKAAN -->

	<div class="detBuku">

		@foreach($buku as $bukuPelajaran)

			<div class="detailBuku">
				<div class="coverBuku">
					<img class="sorotan" src="{{ $bukuPelajaran->thumb }}">
				</div>
				<div class="deskripsi">
					<h1>{{ $bukuPelajaran->judul }}</h1>
					<h3>Penulis : {{ $bukuPelajaran->penulis }}</h3>
					<h3>Waktu Terbit : {{ $bukuPelajaran->waktu_terbit }}</h3>
					<h3>Jumlah Halaman : {{ $bukuPelajaran->jumlah_halaman }} Halaman</h3>
					<p>{{ $bukuPelajaran->deskripsi }}</p>

					<p class="link" onclick="return document.location.href = 'http://vinlibrary.test/read/{{ $bukuPelajaran->slug }}/view';">Baca</p>
				</div>
			</div>

			<br><br><hr><br><br>

		@endforeach

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

	<script src="baca.js"></script>

	<!-- <script>
		$(document).ready(function(){
      
// Pengaturan
var speed = 500;            // Fade speed
var autoswitch = true;        // Auto slider options
var autoswitch_speed = 4000    // Auto slider speed
 
// Menambahkan Class
$('.slide').first().addClass('active');
 
// Sembunyikan Semua Slide
$('.slide').hide();
 
// Tampilkan Slide Pertama
$('.active').show();
 
// Next Handler
$('#next').on('click', nextSlide);
 
// Prev Handler
$('#prev').on('click', prevSlide);
 
// Auto Slider Handler
if(autoswitch == true){
    setInterval(nextSlide, autoswitch_speed);
}
 
// Lanjut Ke Slide Selanjutnya
function nextSlide(){
    $('.active').removeClass('active').addClass('oldActive');
    if($('.oldActive').is(':last-child')){
        $('.slide').first().addClass('active');
    } else {
        $('.oldActive').next().addClass('active');
    }
    $('.oldActive').removeClass('oldActive');
    $('.slide').fadeOut(speed);
    $('.active').fadeIn(speed);
}
 
// Kembali Ke Slide Sebelumnya
function prevSlide(){
    $('.active').removeClass('active').addClass('oldActive');
    if($('.oldActive').is(':first-child')){
        $('.slide').last().addClass('active');
    } else {
        $('.oldActive').prev().addClass('active');
    }
    $('.oldActive').removeClass('oldActive');
    $('.slide').fadeOut(speed);
    $('.active').fadeIn(speed);
}
    });
 
// Show first slide
$('.active').show();
 
// Next Handler
$('#next').on('click', nextSlide);

// Prev Handler
$('#prev').on('click', prevSlide);
 
// Auto Slider Handler
if(autoswitch == true){
    setInterval(nextSlide,autoswitch_speed);
}
	</script> -->

	<!-- <script>
		const cocok = window.matchMedia("(max-width: 1050px)");
		if(cocok.matches) {
			document.location.href = 'http://localhost/buatLomba/index3.php';
		}
	</script> -->
</body>
</html>