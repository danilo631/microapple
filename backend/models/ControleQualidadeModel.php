<?php
class ControleQualidade {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function cadastrar($id_desenvolvimento, $teste_funcionalidade, $teste_usabilidade) {
        // Verifica se o id_desenvolvimento existe para evitar violação de chave estrangeira
        $verifica = $this->pdo->prepare("SELECT id FROM desenvolvimento_software_hardware WHERE id = ?");
        $verifica->execute([$id_desenvolvimento]);

        if ($verifica->rowCount() === 0) {
            throw new Exception("ID de desenvolvimento inválido.");
        }

        $sql = "INSERT INTO controle_qualidade_tecnologia (id_desenvolvimento, teste_funcionalidade, teste_usabilidade)
                VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id_desenvolvimento, $teste_funcionalidade, $teste_usabilidade]);
    }

    public function listarTodos() {
        $sql = "SELECT cq.*, d.tipo, d.versao
                FROM controle_qualidade_tecnologia cq
                JOIN desenvolvimento_software_hardware d ON cq.id_desenvolvimento = d.id";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM controle_qualidade_tecnologia WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $teste_funcionalidade, $teste_usabilidade) {
        $sql = "UPDATE controle_qualidade_tecnologia
                SET teste_funcionalidade = ?, teste_usabilidade = ?
                WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$teste_funcionalidade, $teste_usabilidade, $id]);
    }

    public function deletar($id) {
        $sql = "DELETE FROM controle_qualidade_tecnologia WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
}
