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
	<?php 
		$db = mysqli_connect("localhost","root","");
		if(!$db -> select_db("ankieta11"))
		{
			echo("Nie udało się wybrać bazy danych.");
		}
	?>
	<?php 
	    if (isset($_POST['kolor'])) {
	    $kolor = $_POST['kolor'];

	    if(!$db -> query("UPDATE kolory SET glosy = glosy + 1 WHERE nazwa = '$kolor'"))
	    {
	    	echo("Błąd wysyłania zapytania.");
	    }
	   }
    ?>
    <?php 
    	$zapytanie_suma = "SELECT SUM(glosy) AS suma_glosow FROM kolory";
		$wyniki_sum = $db->query($zapytanie_suma);
		$row_sum = $wyniki_sum->fetch_assoc();
		$suma_glosow = $row_sum["suma_glosow"];

		$query = "SELECT nazwa, glosy FROM kolory";
		$wyniki = $db->query($query);

		if ($wyniki->num_rows > 0) {
		    echo "<table>";
		    echo "<tr><th>Kolor</th><th>Liczba głosów</th><th>Procent głosów</th></tr>";
		    while ($row = $wyniki->fetch_assoc()) {
		        $nazwa_koloru = $row["nazwa"];
		        $liczba_glosow = $row["glosy"];
		        
		        if ($suma_glosow > 0) {
		            $procent_glosow = ($liczba_glosow / $suma_glosow) * 100;
		        } else {
		            $procent_glosow = 0;
		        }
		        
		        echo "<tr><td>".$nazwa_koloru."</td><td>".$liczba_glosow."</td><td>".round($procent_glosow, 2)."%</td></tr>";
		    }
		    echo "</table>";
		} else {
		    echo "Brak wyników do wyświetlenia.";
		}
    ?>
</body>

</html>