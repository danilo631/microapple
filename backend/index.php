<?php
require_once __DIR__ . '/../models/DesenvolvimentoModel.php';
require_once __DIR__ . '/../models/ControleQualidadeModel.php';
require_once __DIR__ . '/../models/LogisticaDistribuicaoModel.php';

$desenvolvimentos = Desenvolvimento::listarTodos();
$qualidades = Qualidade::listarTodos();
$logisticas = Logistica::listarTodos();

echo json_encode([
    'desenvolvimento' => $desenvolvimentos,
    'qualidade' => $qualidades,
    'logistica' => $logisticas
]);
