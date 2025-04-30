<?php
class ControleQualidade {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function cadastrar($id_desenvolvimento, $teste_funcionalidade, $teste_usabilidade) {
        $sql = "INSERT INTO controle_qualidade_tecnologia (id_desenvolvimento, teste_funcionalidade, teste_usabilidade)
                VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id_desenvolvimento, $teste_funcionalidade, $teste_usabilidade]);
    }

    public function listarTodos() {
        $sql = "SELECT * FROM controle_qualidade_tecnologia";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
