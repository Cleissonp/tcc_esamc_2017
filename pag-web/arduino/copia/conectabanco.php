<?php 

	$usuario = "root";
	$senha = "root";
	$host = "192.168.0.254";
	
	$conex�o = mysqli_connect($host,$usuario,$senha, 'Domotica');
	//$selecionabd = mysqli_select_db('Domotica', $conex�o);
		
	if ($conexao)
	{
		echo "conexao realizada com sucesso";
	}	
	else
	{
		echo "n�o foi possivel conectar ao banco de dados";
	}
	


?>