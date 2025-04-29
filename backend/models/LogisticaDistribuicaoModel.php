<?php
class LogisticaDistribuicaoModel {
    private $conn;
    private $table_name = "logistica_distribuicao_tecnologia";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listarTodos() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function criar($id_desenvolvimento, $destino, $metodo_envio) {
        $query = "INSERT INTO " . $this->table_name . " (id_desenvolvimento, destino, metodo_envio)
                  VALUES (:id_desenvolvimento, :destino, :metodo_envio)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id_desenvolvimento", $id_desenvolvimento);
        $stmt->bindParam(":destino", $destino);
        $stmt->bindParam(":metodo_envio", $metodo_envio);
        return $stmt->execute();
    }
}
?>
