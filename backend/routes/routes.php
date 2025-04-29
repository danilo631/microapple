<?php
require_once '../config/db.php';
require_once '../controllers/DesenvolvimentoController.php';
require_once '../controllers/ControleQualidadeController.php';
require_once '../controllers/LogisticaDistribuicaoController.php';

$db = (new Database())->getConnection();

// Exemplo de uso:
$desenvolvimentoController = new DesenvolvimentoController($db);
$resultado = $desenvolvimentoController->listar();

while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: " . $linha['id'] . " | Tipo: " . $linha['tipo'] . "<br>";
}
?>
