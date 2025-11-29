<?php

require_once "animal.php";
require_once "Ape.php";
require_once "Frog.php";

echo "<h3>Shaun</h3>";
$sheep = new Animal("shaun");
echo "Name: " .  $sheep->get_name() . "<br>";
echo "Legs: " . $sheep->get_legs() . "<br>";
echo "Cold blooded: " . $sheep->get_cold_blooded();

echo "<br><h3>Frog</h3>";
$kodok = new Frog("buduk");
echo "Name: " . $kodok->name . "<br>";
echo "Legs: " . $kodok->legs . "<br>";
echo "Cold blooded: " . $kodok->cold_blooded . "<br>";
echo "Jump: ";
echo $kodok->jump();

echo "<br><h3>Ape</h3>";
$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->name . "<br>";
echo "Legs: " . $sungokong->legs . "<br>";
echo "Cold blooded: " . $sungokong->cold_blooded . "<br>";
echo "Yell: " ;
echo $sungokong->yell();

?>