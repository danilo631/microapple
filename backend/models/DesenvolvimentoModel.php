<?php
class DesenvolvimentoModel {
    private $conn;
    private $table_name = "desenvolvimento_software_hardware";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listarTodos() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function criar($tipo, $versao, $equipe_desenvolvimento) {
        $query = "INSERT INTO " . $this->table_name . " (tipo, versao, equipe_desenvolvimento) VALUES (:tipo, :versao, :equipe)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":tipo", $tipo);
        $stmt->bindParam(":versao", $versao);
        $stmt->bindParam(":equipe", $equipe_desenvolvimento);
        return $stmt->execute();
    }
}
?>
