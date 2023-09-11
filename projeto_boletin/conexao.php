<?php
//error_reporting(0);
$servidor ="localhost"; //Máquina Local
$usuario = "root"; //Usuário Padrão
$senha = "123456"; //Se o Workbench tiver senha ou PHPMyADMIN
$dbname="nota"; //Nome do Banco

$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao){
 die("Houve um erro: ".mysqli_connect_error());
}


?>
