<?php
class Livro {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function listar() {
        return $this->pdo->query("SELECT * FROM livros")->fetchAll();
    }

    public function adicionar($dados) {
        $sql = "INSERT INTO livros (titulo, autor, disciplina, ano_escolar, sinopse) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            $dados['titulo'],
            $dados['autor'],
            $dados['disciplina'],
            $dados['ano_escolar'],
            $dados['sinopse']
        ]);
    }

    public function buscar($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM livros WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function atualizar($id, $dados) {
        $sql = "UPDATE livros SET titulo = ?, autor = ?, disciplina = ?, ano_escolar = ?, sinopse = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            $dados['titulo'],
            $dados['autor'],
            $dados['disciplina'],
            $dados['ano_escolar'],
            $dados['sinopse'],
            $id
        ]);
    }

    public function excluir($id) {
        $stmt = $this->pdo->prepare("DELETE FROM livros WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>

