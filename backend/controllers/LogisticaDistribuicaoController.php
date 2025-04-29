<?php
require_once '../models/LogisticaDistribuicaoModel.php';

class LogisticaDistribuicaoController {
    private $logistica;

    public function __construct($db) {
        $this->logistica = new LogisticaDistribuicaoModel($db);
    }

    public function listar() {
        return $this->logistica->listarTodos();
    }

    public function criar($id_desenvolvimento, $destino, $metodo_envio) {
        return $this->logistica->criar($id_desenvolvimento, $destino, $metodo_envio);
    }
}
?>
