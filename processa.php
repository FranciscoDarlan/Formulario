<?php
/*
print_r("name:".$_POST['name']);             FAZ APARECER AS INFORMAÇÕES NA MESMA TELA 
print_r('<br>');                             BR - QUEBRA DE LINHA
print_r(($_POST['email']));
print_r('<br>');
print_r(($_POST['senha']));
print_r('<br>');
print_r(($_POST['telefone']));
print_r('<br>');
print_r(($_POST['genero']));
print_r('<br>');
print_r(($_POST['data_nascimento']));
print_r('<br>');
print_r(($_POST['cidade']));
print_r('<br>');
print_r(($_POST['estado']));
print_r('<br>');
print_r(($_POST['endereco']));
print_r('<br>');
*/

session_start(); // vamos trabalhar com sessao

include_once('config.php');           // AQUI CONSIGO INCLUIR A CONEXÃO - config.php

$nome = $_POST['name'];               //AQUI ESTOU GUARDANDO AS INFORMAÇÕES DO FORMULARIO NA VARIAVEL.
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$data_nascimento = $_POST['data_nascimento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];


$result = "INSERT INTO tabela (nome, senha, email, telefone, sexo, data_nasc, cidade, estado, endereco, created) 
    VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nascimento','$cidade','$estado','$endereco', NOW())";

$resultado_usuario = mysqli_query($conexao, $result);

if (mysqli_insert_id($conexao)) {
    $_SESSION['msg'] = " <p style='color: green;'>USUÁRIO CADASTRADO COM SUCESSO!</p>"; // global
    header("location: home.php");
} else {
    
    $_SESSION['msg'] = " <p style='color: red;'>USUÁRIO NÃO FOI CADASTRADO COM SUCESSO!</p>"; 
    header("location: home.php");
}
