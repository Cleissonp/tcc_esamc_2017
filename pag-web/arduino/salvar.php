<?php
$sensor1 = $_GET['sensor1'];
$strcon = mysqli_connect('192.168.0.100','root','root','Domotica') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO Tabela_Sensor (DataLeitura, Sensor) VALUES ";
$sql .= "(now(),'$sensor1')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Leitura do Sensor efetuada!";
?>
