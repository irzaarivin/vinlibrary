<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Perpustakaannya SMK Negeri 65 Jakarta, Ayo mulai membaca!" />
    <meta name="robots" content="index, nofollow">

	<meta property="og:title" content="VinLibrary | Masuk">
	<meta property="og:url" content="https://fromwhere.000webhostapp.com/">
	<meta property="og:description" content="Perpustakaannya SMK Negeri 65 Jakarta, Ayo mulai membaca!">
	<meta property="og:image" content="https://fromwhere.000webhostapp.com/bg10.png">

    <meta content="Perpustakaan SMK Negeri 65 Jakarta" name="keywords"/>
	<title>VinLibrary | Masuk</title>
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

	@if(session()->has('success'))
		{!! session('success') !!}
	@endif

	@if(session()->has('error'))
		{!! session('error') !!}
	@endif

	@error('email')
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

		<!-- MASUK AKUN -->

		<div class="akun">
			<h1><i class="fa-solid fa-lock"></i></h1>
			<br><br><br>
			<form action="/login" method="POST">
				@csrf
				<label class="email" for="email">Email</label>
				<br>
				<input class="inputEmail" type="email" name="email" id="email" value="{{ old('email') }}" required>
				<br><br><br>
				<label for="password">Password</label>
				<br>
				<input type="password" name="password" id="password" value="{{ old('password') }}" required>
				<br><br><br><br><br>
				<button type="submit">Login</button>
				<p>Don't have an account yet? <a href="register">Register</a></p>
			</form>
		</div>

</body>
</html>