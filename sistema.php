<?php
session_start();  //inicia uma sessão
print_r($_SESSION);  // mostra na tela 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA | GN</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20,147,220), rgb(17,54,71));
        }
        nav{
            opacity: 0.5;
        }
        .divSair{
            background: red;
            color: white;
        }
    </style>

</head>

<body>
    <nav>
        <a href="">SISTEMA DO BANCO DE DADOS</a>
        <button>
            <span>nada dentro do span</span>
        </button>
    </nav>

    <div class="divSair">
        <a href="sair.php">SAIR</a>
    </div>

       <?php 
       echo "<h1>Acessou o sistema<u>$logado<u/></u></h1>";
       ?>
</body>
</html>