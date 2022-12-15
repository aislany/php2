<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios1</title>
</head>
<body>
<h1>Exercicios1</h1>
<?php

//Faça um Programa que leia um número e exiba o dia correspondente da semana. (1-Domingo, 2- Segunda, etc.), se digitar outro valor deve aparecer valor inválido.
//dias da semana ----1 dormingo,2 segunda, 3 terça, 4 quarta, 5 quinta, 6 sexta  e 7 -sábado
echo"<br><br>";
$dia = 1;
switch ($dia){
case '1':
    echo"Domingo";
    break;
    case '2':
        echo"Segunda-Feira";
        break;
        case '3':
       echo"Terça-Feira";
       break;
       case '4':
       echo"Quarta-Feira";
       break;
       case '5':
      echo"Quinta-Feira";
      break;
      case '6':
      echo"Sexta-feira";
      break;
       case '7':
       echo"Sábado";
       break;
       default:
      echo "Dia Inválido";
       break;
       }

?>

</body>
</html>