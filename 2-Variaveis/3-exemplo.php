<?php

//			Tipos de variáveis 

//############### Basico ###############

$nome = "Hcode";
$site = "www.hcode.com.br";

$ano = 1994;
$salario = 5500.99;
$bloqueado = false;

//################ Composto ###############

$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];

$nascimento = new DateTime(); //Objeto

//var_dump($nascimento);

//################# Especiais ###############

$arquivo = fopen("3-exemplo.php", "r");

//var_dump($arquivo);

$nulo = NULL; //Ausência de valor (esoaço)
$vazio = ''; // Foi iniciado mas nao tem informação, mas está reservado na memória (Ar)


?>