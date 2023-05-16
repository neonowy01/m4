<!DOCTYPE html>

<html lang="pl">

<head>
	<meta charset="utf-8">

	<title>php_skrypty3</title>
	
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
	<h1>php_skrypty3</h1>
<section>
	<?php
	if(isset($_POST['podmiana'])){
	    $text = $_POST['text'];
	    $censored_text = str_replace('ze sobą', '[OCENZUROWANO][OCENZUROWANO]', $text);
	    echo $censored_text;
	}
	?>
	<form method="post">
	    <label>Wpisz tekst:</label><br>
	    <textarea name="text"></textarea><br>
	    <input type="submit" name="podmiana" value="Wyślij">
	</form>
</section>
<section>
	<form method="post">
	    <button type="submit" name="button1" value="0">0</button>
	    <button type="submit" name="button2" value="1">1</button>
	    <button type="submit" name="button3" value="2">2</button>
	    <button type="submit" name="button4" value="3">3</button>
	    <button type="submit" name="button5" value="4">4</button>
	    <button type="submit" name="button6" value="5">5</button>
	    <button type="submit" name="button7" value="6">6</button>
	    <button type="submit" name="button8" value="7">7</button>
	    <button type="submit" name="button9" value="8">8</button>
	    <button type="submit" name="button10" value="9">9</button>
	</form>

	<?php
	if(isset($_POST['button1'])){
	    $value = $_POST['button1'];
	    echo "Wartość klikniętego przycisku to: " . $value;
	}

	if(isset($_POST['button2'])){
	    $value = $_POST['button2'];
	    echo "Wartość klikniętego przycisku to: " . $value;
	}

	if(isset($_POST['button3'])){
	    $value = $_POST['button3'];
	    echo "Wartość klikniętego przycisku to: " . $value;
	}

	if(isset($_POST['button4'])){
	    $value = $_POST['button4'];
	    echo "Wartość klikniętego przycisku to: " . $value;
	}

	if(isset($_POST['button5'])){
	    $value = $_POST['button5'];
	    echo "Wartość klikniętego przycisku to: " . $value;
	}

	if(isset($_POST['button6'])){
	    $value = $_POST['button6'];
	    echo "Wartość klikniętego przycisku to: " . $value;
	}

	if(isset($_POST['button7'])){
	    $value = $_POST['button7'];
	    echo "Wartość klikniętego przycisku to: " . $value;
	}

	if(isset($_POST['button8'])){
	    $value = $_POST['button8'];
	    echo "Wartość klikniętego przycisku to: " . $value;
	}

	if(isset($_POST['button9'])){
	    $value = $_POST['button9'];
	    echo "Wartość klikniętego przycisku to: " . $value;
	}

	if(isset($_POST['button10'])){
	    $value = $_POST['button10'];
	    echo "Wartość klikniętego przycisku to: " . $value;
	}
	?>
</section>
<section>
    <form method="post" action="">
        <input type="radio" name="kolor" value="czerwony">Czerwony<br>
        <input type="radio" name="kolor" value="zielony">Zielony<br>
        <input type="radio" name="kolor" value="niebieski">Niebieski<br>
        <input type="radio" name="kolor" value="czarny">Czarny<br>
        <input type="radio" name="kolor" value="biały">Biały<br>
        <input type="submit" value="Oddaj głos">
    </form>
    <?php
    session_start();

    @$wybranyKolor = $_POST["kolor"];

    if (!isset($_SESSION["glosy"])) {
        $_SESSION["glosy"] = [
            "czerwony" => 0,
            "zielony" => 0,
            "niebieski" => 0,
            "czarny" => 0,
            "biały" => 0
        ];
    }

    if (array_key_exists($wybranyKolor, $_SESSION["glosy"])) {
        $_SESSION["glosy"][$wybranyKolor]++;
    }

    $sumaGlosow = array_sum($_SESSION["glosy"]);

    ?>
    <table>
        <tr>
            <th>Kolor</th>
            <th>Ilość głosów</th>
            <th>Procent</th>
        </tr>
        <?php
        foreach ($_SESSION["glosy"] as $kolor => $iloscGlosow) {
            $procent = 0;
            if ($sumaGlosow > 0) {
                $procent = ($iloscGlosow / $sumaGlosow) * 100;
            }
            ?>
            <tr>
                <td><?php echo $kolor; ?></td>
                <td><?php echo $iloscGlosow; ?></td>
                <td><?php echo round($procent, 2); ?>%</td>
            </tr>
            <?php
        }
        ?>
    </table>
</section>
<section>
	<?php
	if(isset($_POST['adresy'])){
	    $url = $_POST['url'];
	    $ip = gethostbyname($url);
	    echo "Adres IP dla $url to $ip";
	}
	?>
	<form method="post">
	    <label>Podaj adres strony www:</label><br>
	    <input type="text" name="url"><br>
	    <input type="submit" name="adresy" value="Wyślij">
	</form>
</section>
</body>

</html>