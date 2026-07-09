<!-- Exercício 04 – Gerador de Senhas
Uma empresa deseja gerar senhas temporárias para seus colaboradores.
Crie uma função chamada gerarSenha() que receba a quantidade de caracteres
desejada e retorne uma senha aleatória contendo letras maiúsculas, minúsculas,
números e caracteres especiais. -->

<?php

function gerarSenha($n) {
    $maiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $minusculas = 'abcdefghijklmnopqrstuvwxyz';
    $numeros = '0123456789';
    $especiais = '!@#$%^&*()-_=+';

    $senha = '';

    $nmaiusculas = strlen($maiusculas);
    $nminusculas = strlen($minusculas);
    $nnumeros = strlen($numeros);
    $nespeciais = strlen($especiais);

    for ($i = 0; $i < $n; $i++) {
 
        $senha .= $maiusculas[random_int(0, $nmaiusculas)-1];
        $i++;

        if ($i >= $n) break;

        $senha .= $minusculas[random_int(0, $nminusculas)-1];
        $i++;

        if ($i >= $n) break;
        
        $senha .= $numeros[random_int(0, $nnumeros)-1];
        $i++;

        if ($i >= $n) break;
        
        $senha .= $especiais[random_int(0, $nespeciais)-1];
    }

    return str_shuffle($senha);
}

$n = 10;
echo gerarSenha($n);