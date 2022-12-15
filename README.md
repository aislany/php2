# php2
 Revisão de comandos básicos de PHP

-Operadores Lógicos
-Estrutura de Decisão
- IF
-Switch
-Ternário
-Estrutura de Repetição
-While

- Atividade

# Operadores Lógicos
-Operadores Lógicos são
&&( And oui E)- se apenas uma expressão dor falsa o resultados será falso.
||(OR ou OU)- uma expresão precisa ser verdadeira para o resultado ser verdadeiro .
!(NOT ou NÃO)- inverte o resultado, se for verdadeira, o resultado vira falso

# Operadores Relacionais

>    maior
<    menor
>=   maior igual
<=   menor igual
!=   diferente 
==   igual

# Estrutura  de decisão

## IF
- quando vc precisa que seu código tome alguma decisão baseado em uma ou mais condições.

## Sintaxe:
if(condição){
    resposta verdadeira
}else{
        resposta falsa
    }
    
### IF Composto 
if(condição)
resposta verdadeira
}else if(condição) {
    resposta 2
    }else{
         }else{
            resposta 3
}

### TERNÁRIO
echo (condição) ? resposta verdadeira : resposta falsa;

### SWITCH
## SINTAXE

switche(variavel){
    case valor:
    código;
    break;
    case valor:
    código;
    break;
    default:
    código;
    break;
}

# Estrutura de repetição

# while - enquanto
- Será executado o laço enquanto a condição for verdadeira
# sintaxe

while(condição){
    código;
}