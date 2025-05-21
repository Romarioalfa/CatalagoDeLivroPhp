<?php
class Conexao {
    public static function conectar() {
        try {
            return new PDO("mysql:host=localhost;dbname=catalago;charset=utf8", "root", "");
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }
}
?>
