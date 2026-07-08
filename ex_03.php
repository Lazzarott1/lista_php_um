<!-- Exercício 03 – Cadastro Seguro
Um sistema de cadastro precisa proteger informações sensíveis dos usuários.
Crie uma função chamada mascararCpf() que receba um CPF e substitua todos os caracteres por *, mantendo visíveis apenas os quatro últimos dígitos.
Retorne o CPF mascarado. -->

<?php

function mascararCpf($cpf) {

$partereal = substr($cpf, -4);
$cpfCodificado = "*******". $partereal;

echo "O CPF codificado é $cpfCodificado ";

}

$cpf = "13970227950";

mascararCpf($cpf);

?>