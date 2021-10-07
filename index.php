<?php
	$string = 'Primo esercizio con PHP';
	$bannedWord = $_GET['bannedWord'];
	$censoredString = str_ireplace($bannedWord, '***', $string);
?>

<h1>Frase: <?php echo $string ?>  </h1>
<h2>Lunghezza della frase: <?php  echo strlen($string) ?> </h2>
<h2>Parola non consentita: <?php echo $bannedWord ?> </h2>
<p> Frase Censurata: <?php echo $censoredString ?> </p>
<p>Lunghezza della frase censurata: <?php  echo strlen($censoredString) ?> </p>
