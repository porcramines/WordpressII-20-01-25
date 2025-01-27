<?php
//4.2 Desarrolle un programa que permita ingresar tres aleatorios, obtener su promedio, luego si el promedio es menor a 10.5, visualizar "Reprobado", si fuera entre 10.5 y 16 “Medio” y si fuera Mayor a 16, visualizar “excelente”, (Guardarlo con el nombre ejercicio2.php)
$numero1=rand(0,20);
$numero2=rand(0,20);
$numero3=rand(0,20);

print "<h1>Desarrolle un programa que permita ingresar tres aleatorios, obtener su promedio, luego si el promedio es menor a 10.5, visualizar Reprobado, si fuera entre 10.5 y 16 “Medio” y si fuera Mayor a 16, visualizar “excelente”</h1><br> ";
 print "el numero 1:".$numero1."<br>";
print "el numero 2:".$numero2."<br>";
print "el numero 3:".$numero3."<br>";
$promedio=($numero1+$numero2+$numero3)/3;
print "el promedio es:".$promedio."<br>";
if ($promedio<10.5) {
	print "Reprobado";
}
if ($promedio<16) {
	print "medio";

}
if ($promedio>16) {
	print "excelente";
}

?>