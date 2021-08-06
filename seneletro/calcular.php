<?php

print_r($_POST);

$quilowattsHora= $_POST["quilowattsHora"];
$nomeCompletoCliente= $_POST["nomeCompletoCliente"];
$endereco= $_POST["endereco"];


if($quilowattsHora >120) {

    
$valorConta= (0.42 * $quilowattsHora);


} elseif ($valorConta <= 120) {

    $valorConta= (0.32 * $quilowattsHora);
}


echo "Conta de luz de $nomeCompletoCliente <br>";

echo "$endereco <br>";

echo "Consumo: $quilowattsHora kwh <br>";

echo "O valor a pagar: R$ $valorConta";




//CALCULAR VALOR DA CONTA DE LUZ