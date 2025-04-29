<?php
class ControleQualidadeModel {
    private $conn;
    private $table_name = "controle_qualidade_tecnologia";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listarTodos() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function criar($id_desenvolvimento, $teste_funcionalidade, $teste_usabilidade) {
        $query = "INSERT INTO " . $this->table_name . " (id_desenvolvimento, teste_funcionalidade, teste_usabilidade)
                  VALUES (:id_desenvolvimento, :teste_funcionalidade, :teste_usabilidade)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id_desenvolvimento", $id_desenvolvimento);
        $stmt->bindParam(":teste_funcionalidade", $teste_funcionalidade);
        $stmt->bindParam(":teste_usabilidade", $teste_usabilidade);
        return $stmt->execute();
    }
}
?>
