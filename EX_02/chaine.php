<?php
$str1="La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile." ;
$caractères_str1=strlen($str1);
echo "<p>La chaine str1 contient $caractères_str1 caractère</p>";

$nombre_mots_str1=str_word_count($str1);
echo"<p>La chaine str1 contient $nombre_mots_str1 mots</p>";

$minuscule=strtolower($str1);
echo"<p>$minuscule</p>";

?>