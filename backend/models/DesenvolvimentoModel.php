<?php
class Desenvolvimento {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function cadastrar($nome_projeto, $tipo, $responsavel, $status, $data_inicio, $data_previsao) {
        $sql = "INSERT INTO desenvolvimento_software_hardware (nome_projeto, tipo, responsavel, status, data_inicio, data_previsao)
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome_projeto, $tipo, $responsavel, $status, $data_inicio, $data_previsao]);
    }

    public function listarTodos() {
        $sql = "SELECT * FROM desenvolvimento_software_hardware";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM desenvolvimento_software_hardware WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $nome_projeto, $tipo, $responsavel, $status, $data_inicio, $data_previsao) {
        $sql = "UPDATE desenvolvimento_software_hardware 
                SET nome_projeto = ?, tipo = ?, responsavel = ?, status = ?, data_inicio = ?, data_previsao = ?
                WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome_projeto, $tipo, $responsavel, $status, $data_inicio, $data_previsao, $id]);
    }

    public function excluir($id) {
        $sql = "DELETE FROM desenvolvimento_software_hardware WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
}
