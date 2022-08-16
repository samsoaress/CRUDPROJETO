<?php
/*Conecxao com o banco de dados*/
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "formulario";
// Create connection
$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
// Check connection
if ($conexao->connect_errno) {
      echo "Erro";
}
echo "<br>";
