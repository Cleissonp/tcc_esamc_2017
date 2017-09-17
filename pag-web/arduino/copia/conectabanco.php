<?php 

	$usuario = "root";
	$senha = "root";
	$host = "192.168.0.254";
	
	$conexão = mysqli_connect($host,$usuario,$senha, 'Domotica');
	//$selecionabd = mysqli_select_db('Domotica', $conexão);
		
	if ($conexao)
	{
		echo "conexao realizada com sucesso";
	}	
	else
	{
		echo "não foi possivel conectar ao banco de dados";
	}
	


?>