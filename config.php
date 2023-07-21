<?php


$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'criandonomebasedados';

$conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);


// IF DE TESTE DE CONEXÃO:

// if($conexao->connect_errno){    
// echo "Erro";
// }else{
// echo"Conexão com BANCO DE DADOS efetuada com secesso ";
// }



?>