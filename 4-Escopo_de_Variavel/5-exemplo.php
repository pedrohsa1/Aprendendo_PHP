<?php

$nome = "Pedro";



function teste()//Ex: casa 1
{
	global $nome; //Avisa a este escopo para enxergar a variável fora do escopo
	echo $nome; //Essa variável não existe nesse escopo, se não definir global $nome
	//Obs.: $_GET é uma variável super global sem presisar sinalizar
}

function teste2()//Ex: casa 2
{
	$nome = "João";
	echo $nome." agora no teste2"; //Não está ouvindo o global
}

teste();
echo "<br/>";
teste2();

?>