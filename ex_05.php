<!-- Exercício 05 – Estatísticas de Texto
Uma editora deseja obter algumas informações sobre os textos enviados pelos
autores.
Crie uma função chamada analisarTexto() que receba um texto e retorne:
● Quantidade de palavras;
● Quantidade de caracteres;
● Quantidade de vogais;
● Quantidade de consoantes. -->

<?php

function analisarTexto($texto) {

    $quantidadePalavras = str_word_count($texto);
    $quantidadeCaracteres = strlen((str_replace(' ','', $texto)));
    $quantidadeVogais = preg_match_all('/[aeiouAEIOU]/', $texto);
    $quantidadeConsoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $texto);

    echo ('O número de palavras é '.$quantidadePalavras . '<br>');
    echo ('O número de caracteres é '.$quantidadeCaracteres . '<br>');
    echo ('O número de vogais é '.$quantidadeVogais . '<br>');
    echo ('O número de consoantes é '.$quantidadeConsoantes );

}


$texto = "Exemplo de texto";

analisarTexto($texto);


?>