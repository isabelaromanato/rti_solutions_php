<?php

print_r($_POST);

$quilowattsHora= $_POST["quilowattsHora"];
$nomeCompletoCliente= $_POST["nomeCompletoCliente"];
$endereco= $_POST["endereco"];


if($quilowattsHora >120) {

    
$valorConta= (0.42 * $quilowattsHora)


}else 
if($valorConta =<120) {

    $valorConta= (0.32 * $quilowattsHora)
}


echo "Conta de luz $nomeCompletoCliente <br>";

echo "$endereco";

echo "Consumo: $"



//CALCULAR VALOR DA CONTA DE LUZ