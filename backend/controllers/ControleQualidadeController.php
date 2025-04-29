<?php
require_once '../models/ControleQualidadeModel.php';

class ControleQualidadeController {
    private $controleQualidade;

    public function __construct($db) {
        $this->controleQualidade = new ControleQualidadeModel($db);
    }

    public function listar() {
        return $this->controleQualidade->listarTodos();
    }

    public function criar($id_desenvolvimento, $teste_funcionalidade, $teste_usabilidade) {
        return $this->controleQualidade->criar($id_desenvolvimento, $teste_funcionalidade, $teste_usabilidade);
    }
}
?>
