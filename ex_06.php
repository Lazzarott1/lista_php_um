<!-- Exercício 06 – Conversor de Temperatura
Uma empresa que fabrica sensores precisa converter temperaturas entre diferentes
escalas.
Crie uma função chamada converterTemperatura() que receba um valor, a escala
de origem e a escala de destino.
A função deverá permitir conversões entre Celsius, Fahrenheit e Kelvin. -->


<?php

function converterTemperatura($temp,$esc,$escD){

if ($esc == 'Celsius' && $escD == 'Kelvin'){

    $resultado = $temp + 273.15;

}else{
    if($esc == 'Kelvin' && $escD == 'Celsius'){

        $resultado = $temp - 273.15;

    }else{
        if($esc == 'Celsius' && $escD == 'Fahrenheit'){

            $resultado = ($temp * 9/5) + 32; 

        }else{
            if($esc == 'Fahrenheit' && $escD == 'Celsius'){

            $resultado = ($temp - 32) * 5/9; 

            }else{
                if($esc == 'Fahrenheit' && $escD == 'Kelvin'){

            $resultado = ($temp - 32)/1.8 + 273.15; 
            
            }else{
                $resultado = ($temp - 273.15)*1.8 + 32; 
            }
        }
    }
}

}
echo $resultado;


}

$temp = 100;
$esc = 'Kelvin';
$escD = 'Fahrenheit';

converterTemperatura($temp,$esc,$escD);

?>