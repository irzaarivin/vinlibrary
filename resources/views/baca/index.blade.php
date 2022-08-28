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
	<title>VinLibrary | Baca</title>
	<link rel="stylesheet" href="css/baca.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="js/slick-1.8.1/slick/slick.css">
	<script src="js/jQuery/jquery-3.6.0.min.js"></script>
    <script src="js/slick-1.8.1/slick/slick.min.js"></script>
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
			<p><i class="fa-brands fa-readme"></i></p>
			<a href="about"><i class="fa-solid fa-circle-info"></i></a>
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
			<p>Baca</p>
			<a href="about">Tentang</a>
			<div>
				<input id="temukan" type="text" placeholder="cari buku disini...">
				<button onclick="return cari();">
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

	@auth

	<!-- PERPUSTAKAAN -->

	<div id="perpustakaan" class="perpustakaan">
		<div class="buku">
			<!-- <iframe src="buku/fiksi/adventure/Adventures-of-Huckleberry-Finn.pdf" width="100%" height="500px"></iframe> -->
			<h2>Buku Belajar</h2>
			<div class="daftarIsi" class="pelajaran">

				@foreach($pelajaran as $bukuPelajaran)

				<a href="http://vinlibrary.test/read/{{ $bukuPelajaran->slug }}" style="text-align: center;">
					<img src="{{ $bukuPelajaran->thumb }}">
					<p>{{ $bukuPelajaran->judul }}</p>
				</a>

				@endforeach

			</div>
		</div>

		<div class="buku">
			<h2>Buku Fiksi</h2>
			<div class="daftarIsi fiksi">

				@foreach($fiksi as $bukuFiksi)

				<a href="http://vinlibrary.test/read/{{ $bukuFiksi->slug }}" style="text-align: center;">
					<img src="{{ $bukuFiksi->thumb }}">
					<p>{{ $bukuFiksi->judul }}</p>
				</a>

				@endforeach

			</div>
		</div>

		<div class="buku">
			<h2>Buku Non-Fiksi</h2>
			<div class="daftarIsi nonFiksi">
				<a href="">
					<img id="nonFiksi1" src="buku/non-fiksi/abe.jpg">
					<p>Abe</p>
				</a>
				<a href="">
					<img id="nonFiksi2" src="buku/non-fiksi/acomedy.jpg">
					<p>Acomedy</p>
				</a>
				<a href="">
					<img id="nonFiksi3" src="buku/non-fiksi/auto.jpg">
					<p>Auto</p>
				</a>
				<a href="">
					<img id="nonFiksi4" src="buku/non-fiksi/theart.jpg">
					<p>The Art</p>
				</a>
				<a href="">
					<img id="nonFiksi5" src="buku/non-fiksi/thecount.jpg">
					<p>The Count</p>
				</a>
				<a href="">
					<img id="nonFiksi1" src="buku/non-fiksi/abe.jpg">
					<p>Abe</p>
				</a>
				<a href="">
					<img id="nonFiksi2" src="buku/non-fiksi/acomedy.jpg">
					<p>Acomedy</p>
				</a>
				<a href="">
					<img id="nonFiksi3" src="buku/non-fiksi/auto.jpg">
					<p>Auto</p>
				</a>
				<a href="">
					<img id="nonFiksi4" src="buku/non-fiksi/theart.jpg">
					<p>The Art</p>
				</a>
				<a href="">
					<img id="nonFiksi5" src="buku/non-fiksi/thecount.jpg">
					<p>The Count</p>
				</a>
				<a href="">
					<img id="nonFiksi1" src="buku/non-fiksi/abe.jpg">
					<p>Abe</p>
				</a>
				<a href="">
					<img id="nonFiksi2" src="buku/non-fiksi/acomedy.jpg">
					<p>Acomedy</p>
				</a>
				<a href="">
					<img id="nonFiksi3" src="buku/non-fiksi/auto.jpg">
					<p>Yogi Auto</p>
				</a>
				<a href="">
					<img id="nonFiksi4" src="buku/non-fiksi/theart.jpg">
					<p>The Art</p>
				</a>
				<a href="">
					<img id="nonFiksi5" src="buku/non-fiksi/thecount.jpg">
					<p>The Count</p>
				</a>
			</div>
		</div>

		<script>
			$(document).ready(function(){
			    $('.daftarIsi').slick({
			    	infinite: true,
				    slidesToShow: 4,
			     	slidesToScroll: 2,
			     	autoplay: true,
			     	autoplaySpeed: 2500,
			     	dots: false,
			     	arrows: false,
			     	prevArrow: '<i class="fas fa-angle-left left-arrow"></i>',
			    	nextArrow: '<i class="fas fa-angle-right right-arrow"></i>',
				    pauseOnHover: false,
				    swipeToSlide: true,
				    responsive: [{
			            breakpoint: 930,
			            settings: {
				            arrows: false,
				            centerMode: false,
				            slidesToShow: 3,
				            slidesToScroll: 1
				        }
			        },
			        {
			            breakpoint: 800,
			            settings: {
				            arrows: false,
				            centerMode: false,
				            slidesToShow: 4,
				            slidesToScroll: 1
				        }
			        },
			        {
			            breakpoint: 770,
			            settings: {
				            arrows: false,
				            centerMode: false,
				            slidesToShow: 4,
				            slidesToScroll: 1,
				            pauseOnHover: false,
				            pauseOnFocus: true
				        }
			        },
				    {
				        breakpoint: 570,
				        settings: {
					        arrows: false,
					        centerMode: true,
					        pauseOnHover: false,
					        slidesToShow: 3,
					        slidesToScroll: 1
					    }
				    },
				    {
				        breakpoint: 500,
				        settings: {
					        arrows: false,
					        centerMode: false,
					        pauseOnHover: false,
					        slidesToShow: 2,
					        slidesToScroll: 1
					    }
				    }]
			    });
			});
		</script>

	</div>

	{{-- <script>
		let keyword = document.getElementById('temukan');
		let container = document.getElementById('perpustakaan');

		keyword.addEventListener("keyup", function() {

			let xhr = new XMLHttpRequest();

			xhr.onreadystatechange = function() {

				if(xhr.readyState == 4 && xhr.status == 200) {
					let container = document.getElementById('container');
					container.innerHTML = xhr.responseText;
				};

			};

			xhr.open('GET', 'ajax/temukanBuku.php?keyword=' + keyword.value, true);
			xhr.send();

		});
	</script> --}}

	@else

	<h1 style="width: 95%; margin: 200px auto; text-align: center; font-family: 'Montserrat', sans-serif;"><a href="/register">Daftar</a> atau <a href="/login">Masuk</a> untuk melihat semua buku yang tersedia</h1>

	@endauth

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