
<?php
require 'db/Conexao.php';
require 'classes/Livro.php';

$pdo = Conexao::conectar();
$livro = new Livro($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $livro->adicionar($_POST);
    header("Location: index.php");
    exit;
}
?>

<link rel="stylesheet" href="css/style.css">
<h1>Adicionar Livro</h1>
<form method="post">
    <label>Título:</label><input type="text" name="titulo" required><br>
    <label>Autor:</label><input type="text" name="autor" required><br>
    <label>Disciplina:</label><input type="text" name="disciplina" required><br>
    <label>Ano Escolar:</label><input type="text" name="ano_escolar" required><br>
    <label>Sinopse:</label><textarea name="sinopse"></textarea><br>
    <button type="submit">Salvar</button>
</form>

