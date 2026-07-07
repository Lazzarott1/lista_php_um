<!-- Exercício 01 – Calculadora da Engenharia
Uma empresa de engenharia precisa automatizar alguns cálculos utilizados em seus
projetos.
Crie uma função chamada calcularFormula() que receba dois números e aplique a
seguinte fórmula: -->

<?php

function calcularFormula($x, $y){

if (($x+ $y) == 0) {
return "Não é possível realizar a divisão por zero.";
}
$resultado =(pow($x,2)+ pow($y, 2)) /($x+$y);

return $resultado;
}


$x = 10;
$y = 5;

echo "Valor de X: $x <br>";
echo "Valor de Y: $y <br><br>";
echo "Resultado: ". calcularFormula($x, $y);

?>