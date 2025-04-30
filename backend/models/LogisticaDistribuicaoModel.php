<?php
class LogisticaDistribuicao {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function cadastrar($id_desenvolvimento, $destino, $metodo_envio) {
        $sql = "INSERT INTO logistica_distribuicao_tecnologia (id_desenvolvimento, destino, metodo_envio)
                VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id_desenvolvimento, $destino, $metodo_envio]);
    }

    public function listarTodos() {
        $sql = "SELECT * FROM logistica_distribuicao_tecnologia";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
