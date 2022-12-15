<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercicios5</title>

</head>

<body>
<?php
echo "<br>";
$sexo = "c";
switch ($sexo){
    case 'f':
        echo "Feminino";
        break;
    case 'm':
        echo "Masculino";
        break;
    default:
        echo "Sexo Invalido";
        break;
}
?>
