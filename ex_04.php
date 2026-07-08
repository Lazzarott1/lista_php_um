<!-- Exercício 04 – Gerador de Senhas
Uma empresa deseja gerar senhas temporárias para seus colaboradores.
Crie uma função chamada gerarSenha() que receba a quantidade de caracteres
desejada e retorne uma senha aleatória contendo letras maiúsculas, minúsculas,
números e caracteres especiais. -->

<?php

function gerarSenha($n) {

$senha = random_bytes($n);
echo $senha;

}

$n = 9;

gerarSenha($n);

?>