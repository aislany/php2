<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercício 9</title>
</head>
<body>
    <p>Um posto está vendendo combustíveis com a seguinte tabela de descontos:<BR>
    Álcool:<BR>
        até 20 litros, desconto de 3% por litro<BR>
        acima de 20 litros, desconto de 5% por litro<BR>
    Gasolina:<BR>
        até 20 litros, desconto de 4% por litro<BR>
        acima de 20 litros, desconto de 6% por litro<BR>
Escreva um algoritmo que leia o número de litros vendidos,<BR>
o tipo de combustível (codificado da seguinte forma: A-álcool, G-gasolina),<BR>
calcule e imprima o valor a ser pago pelo cliente sabendo-se que o preço do<BR>
litro da gasolina é R$ 5,50 o preço do litro do álcool é R$ 3,90.</p>
<?php



 $litros = 60;
echo "Digite quantos litros você quer abastecer: ". $litros;
echo"<br>";
 $combustivel = "G";
echo "Digite A para álcool ou G para gasolina: ".$combustivel;
$preco = 0;
if ($combustivel == "A" or $combustivel == "a"){
if($litros <= 20){
        echo"<br>";
        echo "O total a pagar ".$litros * 3.9;
        $desconto = ( $litros * 3.9)*0.03 ;
        echo"<br>";
        echo "O  desconto é R$ ".$desconto;
        $preco = ( $litros * 3.9) - $desconto;
        echo"<br>";
        echo "O preço a pagar com desconto é R$ ".$preco;
}else{
    echo"<br>";
    echo "O total a pagar ".$litros * 3.9;
    $desconto = ( $litros * 3.9)*0.05 ;
    echo"<br>";
    echo "O  desconto é R$ ".$desconto;
    $preco = ( $litros * 3.9) - $desconto;
    echo"<br>";
    echo "O preço a pagar com desconto é R$ ".$preco;
}

}elseif($combustivel == "G" or $combustivel == "g"){
if($litros <= 20){
    echo"<br>";
    echo "O total a pagar ".$litros * 5.5;
    $desconto = ( $litros * 5.5)*0.04 ;
    echo"<br>";
    echo "O  desconto é R$ ".$desconto;
    $preco = ( $litros * 5.5) - $desconto;
    echo"<br>";
    echo "O preço a pagar com desconto é R$ ".$preco;
}else{
    echo"<br>";
    echo "O total a pagar ".$litros * 5.5;
    $desconto = ( $litros * 5.5)*0.06 ;
    echo"<br>";
    echo "O  desconto é R$ ".$desconto;
    $preco = ( $litros * 5.5) - $desconto;
    echo"<br>";
    echo "O preço a pagar com desconto é R$ ".$preco;
}
}

?>
</body>

</html>