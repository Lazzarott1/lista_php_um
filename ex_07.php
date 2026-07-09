<!-- Exercício 07 – Sistema de Descontos
Uma loja virtual oferece descontos conforme o valor da compra.
Crie uma função chamada calcularDesconto() que receba o valor total da compra
e aplique as seguintes regras:
● Até R$ 100,00: sem desconto;
● Acima de R$ 100,00: 10%;
● Acima de R$ 500,00: 20%;
● Acima de R$ 1.000,00: 30%.
Retorne o valor original, o desconto aplicado e o valor final da compra. -->

<?php


function calcularDesconto($valorTotal){

    if ($valorTotal > 1000) {
        $desconto = 30;
    } else if ($valorTotal > 500) {
        $desconto = 20;
    } else if ($valorTotal > 100) {
        $desconto = 10;
    } else {
        $desconto = 0;
    }

    $valorFinal = $valorTotal * (1 - $desconto / 100);

    echo 'O valor original é R$' . $valorTotal . ' com desconto de ' . $desconto . '% o valor final é de R$' . $valorFinal;
}

$valorTotal = 180;

calcularDesconto($valorTotal);

?>