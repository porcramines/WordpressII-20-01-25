<?php
//4.4 Hacer un programa que lea 10 números, los almacene en un array y los ordene de forma descendente. (Guardarlo con el nombre “ejercicio4.php”)

print "Hacer un programa que lea 10 números, los almacene en un array y los ordene de forma descendente";

$numer1=$_POST['numero1'];
$numer2=$_POST['numero2'];
$numer3=$_POST['numero3'];
$numer4=$_POST['numero4'];
$numer5=$_POST['numero5'];
$numer6=$_POST['numero6'];
$numer7=$_POST['numero7'];
$numer8=$_POST['numero8'];
$numer9=$_POST['numero9'];
$numer10=$_POST['numero10'];

$numeros=array($numer1,$numer2,$numer3,$numer4,$numer5,$numer6,$numer7,$numer8,$numer9,$numer10);
sort($numeros);
print "<br>";
for ($i=0; $i <10 ; $i++) { 
	print $numeros[$i];
	print "<br>";
}
?>