<?php
/*Imprimir los múltiplos de 3; se empieza a contar desde 1 hasta n. (Guardarlo con el nombre ejercicio1.php)
*/

$numero=$_POST['numero'];
for ($i=1; $i <=$numero ; $i++) { 
	
	if ($i%3==0) {
		print $i;

	}
	print "<br>";
}



?>
