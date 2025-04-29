<?php
require_once '../models/DesenvolvimentoModel.php';

class DesenvolvimentoController {
    private $desenvolvimento;

    public function __construct($db) {
        $this->desenvolvimento = new DesenvolvimentoModel($db);
    }

    public function listar() {
        return $this->desenvolvimento->listarTodos();
    }

    public function criar($tipo, $versao, $equipe) {
        return $this->desenvolvimento->criar($tipo, $versao, $equipe);
    }
}
?>
