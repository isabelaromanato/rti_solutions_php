<?php


if (
    isset($_POST["nomeFuncionario"]) && isset($_POST["salarioAtual"])
    && isset($_POST["opcao"]) && isset($_POST["cargo"]) 
   
) {

$nomeFuncionario= $_POST ["nomeFuncionario"] ;
$salarioAtual= $_POST ["salarioAtual"] ;
$opcao= $_POST ["opcao"] ;
$cargo= $_POST ["cargo"] ;
$artigo;

} else {
    echo "Você não enviou os dados corretamente";
    die;
}

if ($salarioAtual > 5000) {

    $salarioAtual= ($salarioAtual / 100 * 10);

} else  {

    $salarioAtual = ($salarioAtual / 100 * 20);
}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <main>
        
        <p>O(A) <?= $nomeFuncionario?> passará a receber R$ <em><?= number_format($salarioAtual, 2, ",", ".") ?> no cargo de <?= $cargo?></em>.</p>
       
    </main>
</body>

</html>