<?php

$host = "192.168.0.100";
$usuario = "root";
$senha = "root";
$bd = "Domotica";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
  echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>