<?php

$n1 = $_POST['n1'];

$a = array(rand(0,$n1));
$numero = $a[rand(0, count($a)-1)];

echo "<h2>Número Sorteado</h2>";

echo "O numero foi: ".$numero;

?>