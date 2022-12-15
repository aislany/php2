<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisão</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <?php
$nome ="Aislany";
$idade =18;
$fumante = false;
//False -- Falso-0  / true - verdadeiro -1
echo "<p>ID do cliente: $nome <br>";
echo"Idade do cliente: $idade<br>";
echo"Fumante:$fumante </p>";

/* OPERADORES <ARITIMEDICOS */
echo 20 *3;
echo "<br>";

//OPERADORES RALACIONAIS

echo 20>10;
echo "<br>";

//ESTRUTURA DE DECISÃO

// UMA PESSOA COM 75 ANOS NÃO PODE ENTRAR NA FESTA DA MELYSSA
//SE FOR FUMANTE NÃO PODE ENTRAR
// idade não pode ser < 10 anos

// IF SIMPLES  - TERÁ NO MÁXIMO 2 RESPOSTA DIFERENTE 
echo  "<br>";
$idade =10 ;
$fumante = false;
// if = SE
if($idade >= 75 || $fumante == true || $idade <= 10){
    echo"PROIBIDO A ENTRADA ACIMA DE 75 ANOS NA FESTA, NÃO PODE SER FUMANTE E NÃO ENTRA ABAIXO DE 10 ANOS";
}else{
    echo "pode entar, seja bem vindo";
}



//UM ALUNO, SE TIRA  UMA NOTA ACIMA DE 8 ELE É APROVADO
// SE TIRA UMA NOTA ENTRE 5 E 8 RECUPERAÇÃO
// SE ELE TIRAR NOTA ABAIXO DE 5 ESTARÁ REPROVADO

//IF COMPOSTO - TERÁ MAIS DE 2  RESPOSTA DIFERENTES
echo"<br>";
$nota = 10;
if($nota >= 8  ){
    echo "Aprovado(a)";
}else if ($nota >= 5){
echo "Rcuperação";
}else{
 echo "Reprovado(a)";
}

//vcs irão no Senac somente se:
//estiver uniformisado
//chegou no horário
//mesagem:verdadeiro ---- PARABÉNS, VC PODE IR
//         falso ------- FERROU, VC VAI FICAR NA SALA DO VALDEIR

echo  "<br>";
$horario =true;
$uniformisado = true;
// if = SE
if($horario == true && $uniformisado == true){
    echo" PARABÉNS, VC PODE IR";
}else{
    echo "FERROU, VC VAI FICAR NA SALA DO VALDEIR ";
}


//ternário
echo  "<br>";
$horario =true;
$uniformisado = false;
// if = SE
echo ($horario == true && $uniformisado == true) ? "PARABÉNS, VC PODE IR" : "FERROU, VC VAI FICAR NA SALA DO VALDEIR";
   
//SUA COR FAVORITA PODE SER: VERMELHO,AZUL,VERDE
//SWTICH - ESCOLHER UMA DAS OPÇÕES

$cor  ="Azul";
switch ($cor) {
    case 'Azul':
        echo"<br>";
        echo"Sua cor favorita é $cor";
        break;
        case 'Verde':
            echo"<br>";
            echo"Sua cor favorita é $cor";
            break;
            case 'Vermelho':
                echo"<br>";
                echo"Sua cor favorita é $cor";
                break;
                default:
                echo"<br>";
                echo" Sua cor favorita não é azul, verde  ou vermelho";
                break;
}
//dias da semana ----1 dormingo,2 segunda, 3 terça, 4 quarta, 5 quinta, 6 sexta  e 7 -sábado
echo"<br><br>";
$dia = 10;
switch ($dia) {
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
// escolha um presente para o professor em seu aniversário:
//1 - Um porte de sorvete
//2 - Mouse quebrado
//3 - Celular da biqueira funcionando desbloqueado
//4 -fone usado
//5- Mouse ped rasgado
//6- 1 kg feijão 
//7 - um vale burger king


echo"<br><br>";
$presente = 1;
switch ($presente) {
case '1':
    echo"Pote de Sorvete";
    break;
    case '2':
        echo" Mouse quebrado";
        break;
        case '3':
       echo"Celular da biqueira funcionando desbloqueado";
       break;
       case '4':
       echo"fone usado";
       break;
       case '5':
      echo"Mouse ped rasgado";
      break;
      case '6':
      echo"1 kg feijão";
      break;
       case '7':
       echo" um vale burger king";
       break;
       default:
      echo "Presente Inválido";
       break;

}






    ?>
</body>
</html>