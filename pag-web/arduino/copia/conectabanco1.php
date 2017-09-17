<?php


$usuario = "root";
$senha = "root";
$host = "192.168.0.254";

$link = mysqli_connect($host,$usuario,$senha, 'Domotica');
/* 
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL do Raspbian." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 
echo "A conexao foi realizada no MySql do Raspbian." . PHP_EOL;
 
//mysqli_close($link);
*/



?>