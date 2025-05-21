<?php
require 'db/Conexao.php';
require 'classes/Livro.php';

$pdo = Conexao::conectar();
$livro = new Livro($pdo);
$lista = $livro->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro livro escolares </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <ul class="menu">
               <li><a href="index.php">Inicio</a></li>
               <li><a href="editar.php">Listar livros</a></li>
               <li><a href="adicionar.php">Cadastrar livros</a></li>
               <li><a href="excluir.php">Remover livros</a></li>
            </ul>
        </nav>
    </header>

    
    
</body>
</html>