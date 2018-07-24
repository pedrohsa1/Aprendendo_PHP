<?php
/*Variáveis Pré-Definidas ou Arrays Super Globais são variaveis internas do PHP que já vem com alguns recursos.

-informações externas: POST ou GET
-informações de ambiente
*/

$nome = $_GET["nome"]; //Array Super global
//Também é possivel converter um tipo de variável, chamaos de cast
//$nomeRecebeInt = (int)$_GET["nome"];


/*
O que é URL?
URL é a rota em conjunto

O que é URI?
São partes da URL como: http, https, .com, .br, Query String

http://localhost/Udemy_PHP/Aprendendo_PHP/3-Variaveis_Pre-Definidas/4-exemplo.php?nome=teste
query string
url(endereço da pagina) ? variáveis
*/
var_dump($nome); 
//string(5) "teste"

/*ENVIANDO MAIS DE UMA VARIAVEL VIA GET
http://localhost/Udemy_PHP/Aprendendo_PHP/3-Variaveis_Pre-Definidas/4-exemplo.php?nome=teste&nome2=teste2
*/

//Pegando IP do usuário
//Como está no Localhost o IP aparece diferente, mas no servidor está tudo ok
$ip1 = $_SERVER["REMOTE_ADDR"];
echo $ip1;

echo "<br/><br/><br/>";
//Pegando IP do usuário 2
$ip2 = $_SERVER["SCRIPT_NAME"];
echo $ip2;

?>