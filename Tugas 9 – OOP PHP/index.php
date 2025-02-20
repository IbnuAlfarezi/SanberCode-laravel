<?php

require_once('animal.php');
require_once('ape.php');
require_once('frog.php');

$sheep = new Animal("shaun");

$sheep->set_cold_blooded(false);

echo "Nama : ";
echo $sheep->nama . "\n"; // "shaun"
echo "Legs : ";
echo $sheep->legs . "\n"; // 4
echo "cold blooded : ";
echo $sheep->cold_blooded ? "yes\n" : "no\n"; // no

$sungokong = new Ape("kera sakti");
$sungokong->set_legs(2);
echo "Nama : ";
echo $sungokong->nama . "\n";
echo "Legs: ";
echo $sungokong->get_legs() . "\n";
echo "cold blooded : ";
echo $sungokong->cold_blooded ? "yes\n" : "no\n";
$sungokong->yell(); // "Auooo"

$kodok = new Frog("buduk");
echo "nama : ";
echo $kodok->nama . "\n";
echo "Legs: ";
echo $kodok->legs . "\n";
echo "cold blooded : ";
echo $kodok->cold_blooded ? "yes\n" : "no\n";
$kodok->jump(); // "hop hop"

?>