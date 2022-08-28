<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ $book->judul }}</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		body {
			overflow: hidden;
		}
		embed {
			width: 100vw;
			height: 100vh;
			border: none;
			outline: none;
			background-color: white;
		}
	</style>
</head>
<body>
	<embed src="http://vinlibrary.test/buku/fiksi/{{ $book->slug }}.pdf#toolbar=0">
</body>
</html>