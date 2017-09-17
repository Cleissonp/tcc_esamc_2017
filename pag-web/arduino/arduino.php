<?php

// $sock - Variável declarada para ciração do socket;
// socket_create - Função nativa do PHP para habilitar o novo socket;
// http://php.net/manual/pt_BR/function.socket-create.php - Tutorial completo sobre a função socket_create e seus parâmetros;
$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

// socket_connect - Função que irá conectar o web socket desenvolvido em PHP com o Arduino;
// Parâmetros do socket_connect - (Nome do scoket, IP do Arduino, Porta);
socket_connect($sock,"192.168.0.99", 80);

// Estrutura de seleção que receberá as requisições da interface web(index.html) e associar com o parâmetro do $_POST['estadoLed'];
if ($_POST['estadoLed']=="luz_ExternaOn")
{
	// socket_write - Função nativa do PHP que enviará via socket o valor("1") para estrutura de seleção(switch (client.read()) do arduino,
	// para acionamento do LED;
    socket_write($sock, "1");
}
if ($_POST['estadoLed']=="luz_ExternaOff")
{
    socket_write($sock, "2");
}
if ($_POST['estadoLed']=="luz_internaOn")
{
    socket_write($sock, "3");
}
if ($_POST['estadoLed']=="luz_internaOff")
{
    socket_write($sock, "4");
}


if ($_POST['estadoLed']=="abrirPortao")
{
    socket_write($sock, "5");
}
if ($_POST['estadoLed']=="FecharPortao")
{
    socket_write($sock, "6");
}
if ($_POST['estadoLed']=="luz_SalaOn")
{
    socket_write($sock, "7");
}
if ($_POST['estadoLed']=="luz_SalaOff")
{
    socket_write($sock, "8");
}



if ($_POST['estadoLed']=="luz_CozinhaOn")
{
    socket_write($sock, "9");
}
if ($_POST['estadoLed']=="luz_CozinhaOff")
{
    socket_write($sock, "A");
}
if ($_POST['estadoLed']=="luz_SuiteOn")
{
    socket_write($sock, "B");
}
if ($_POST['estadoLed']=="luz_SuiteOff")
{
    socket_write($sock, "C");
}



if ($_POST['estadoLed']=="luz_QuartoOn")
{
    socket_write($sock, "D");
}
if ($_POST['estadoLed']=="luz_QuartoOff")
{
    socket_write($sock, "E");
}
if ($_POST['estadoLed']=="luz_BanheiroOn")
{
    socket_write($sock, "F");
}
if ($_POST['estadoLed']=="luz_BanheiroOff")
{
    socket_write($sock, "G");
}


// header - Função nativa do PHP que retorna a index.html após acionamento dos botões;
header("Location:principal.php#");

// socket_close - Função nativa do PHP que encerra a conexão com o socket;
socket_close($sock);
?>   
