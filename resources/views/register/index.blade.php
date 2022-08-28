<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Perpustakaannya SMK Negeri 65 Jakarta, Ayo mulai membaca!" />
    <meta name="robots" content="index, nofollow">
	
    <meta property="og:title" content="VinLibrary | Daftar">
    <meta property="og:url" content="https://fromwhere.000webhostapp.com/">
    <meta property="og:description" content="Perpustakaannya SMK Negeri 65 Jakarta, Ayo mulai membaca!">
    <meta property="og:image" content="https://fromwhere.000webhostapp.com/bg10.png">

    <meta content="Perpustakaan SMK Negeri 65 Jakarta" name="keywords"/>
	<title>VinLibrary | Daftar</title>
	<link rel="stylesheet" href="css/akun.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <script>
		const cocok = window.matchMedia("(max-width: 1050px)");
		if(cocok.matches) {
			document.location.href = 'http://localhost/buatLomba/index3.php';
		}
	</script> -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
	<script src="js/jQuery/jquery-3.6.0.min.js"></script>
	<script type="text/javascript">
	    (function(){
	        emailjs.init("jhk9lSY3QkvW1GXuo");
	    })();
	</script>
</head>
<body>

	<!-- LOADING -->

	<div class="preLoader">
		SABAR
		<span></span>
	</div>

	<script>
		$(document).ready(function(){
			$(".preLoader").fadeOut();
		})
	</script>

	@error('email')
		<br>
		<div class="error">
			<p>{{ $message }}</p>
		</div>
	@enderror

	@error('namaDepan')
		<br>
		<div class="error">
			<p>{{ $message }}</p>
		</div>
	@enderror

	@error('namaBelakang')
		<br>
		<div class="error">
			<p>{{ $message }}</p>
		</div>
	@enderror

	@error('tanggalLahir')
		<br>
		<div class="error">
			<p>{{ $message }}</p>
		</div>
	@enderror

	@error('password')
		<br>
		<div class="error">
			<p>{{ $message }}</p>
		</div>
	@enderror

	<div class="akun">
		<h1><i class="fa-solid fa-id-card"></i></h1>
		<br><br><br><br>
		<form id="formDaftar" action="/register" method="POST">
			@csrf
			<label class="email" for="email">Email</label>
			<br>
			<input class="inputEmail" type="email" name="email" id="email" @error('email') placeholder="!" @enderror value="{{ old('email') }}" required>
			<br><br><br>
			<div class="nama">
				<div class="namaDepan">
					<label for="namaDepan">First Name</label>
					<br>
					<input type="text" name="namaDepan" id="namaDepan" @error('namaDepan') placeholder="!" @enderror value="{{ old('namaDepan') }}" required>
				</div>
				<div class="namaBelakang">
					<label for="namaBelakang">Last Name</label>
					<br>
					<input type="text" name="namaBelakang" @error('namaBelakang') placeholder="!" @enderror value="{{ old('namaBelakang') }}" id="namaBelakang">
				</div>
			</div>
			<br><br>
			<div class="apaan">
				<div class="tanggalLahir">
					<label for="tanggalLahir">Birthday</label>
					<br>
					<input type="date" name="tanggalLahir" id="tanggalLahir" @error('tanggalLahir') placeholder="!" @enderror value="{{ old('tanggalLahir') }}" required>
				</div>
				<div class="jenisKelamin">
					<div class="pria">
						<label for="pria">Male</label><br>
						<input type="radio" name="jenisKelamin" value="pria" id="pria" value="{{ old('jenisKelamin') }}" required>
					</div>
					<div class="wanita">
						<label for="wanita">Female</label><br>
						<input type="radio" name="jenisKelamin" value="wanita" id="wanita" value="{{ old('jenisKelamin') }}" required>
					</div>
				</div>
			</div>
			<br><br>
			<label for="password">Password</label>
			<br>
			<input type="password" name="password" id="password" @error('password') placeholder="!" @enderror required>
			<br><br><br><br><br><br>
			<button type="submit">Register</button>
			<p>Already have an account? <a href="login">Login</a></p>
		</form>
	</div>

	<script>
		const form = document.getElementById('formDaftar');
		form.addEventListener('submit', function() {
			emailjs.send("service_vrd680q","template_n2leyqu",{
			to_name: "Customer",
			from_name: "65Blog",
			});
		});
	</script>

</body>
</html>