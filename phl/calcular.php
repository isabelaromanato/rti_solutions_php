<?php

print_r($_POST);


$cidadeOrigem= $_POST["cidadeOrigem"];
$cidadeDestino= $_POST["cidadeDestino"];
$distancia= $_POST["distancia"];
$pedagios= $_POST["pedagios"];

$valorFixoPedagio= 9.40; 
$valorPorKm= 6.00;

$valorSaida= ($pedagios * $valorFixoPedagio + $distancia * $valorPorKm);



echo "A viagem de $cidadeOrigem à $cidadeDestino irá custar total de R$ $valorSaida";

//CALCULAR VALOR DO FRETE