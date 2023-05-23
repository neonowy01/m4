<!DOCTYPE html>

<html lang="pl">

<head>
	<meta charset="utf-8">

	<title>php_baza6_kowalski</title>
	
	<link rel="stylesheet" href="styles.css">
	
	<!-- skrypt zapewniający zgodność ze starszymi wersjami przeglądarki IE -->
	<script>
	document.createElement('header');
	document.createElement('nav');
	document.createElement('article');
	document.createElement('footer');
	document.createElement('section');
	</script>
</head>

<body>
	<h1>php_baza6</h1>
	<form method="post" action="wyniki.php">
        <input type="radio" name="kolor" value="czerwony">Czerwony<br>
        <input type="radio" name="kolor" value="zielony">Zielony<br>
        <input type="radio" name="kolor" value="niebieski">Niebieski<br>
        <input type="radio" name="kolor" value="czarny">Czarny<br>
        <input type="radio" name="kolor" value="bialy">Biały<br>
        <input type="submit" value="Oddaj głos">
    </form>
</body>

</html>