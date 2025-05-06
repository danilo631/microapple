<?php
include '../config/db.php';
include '../../public/includes/logger.php';// atualize o caminho conforme sua estrutura
include '../models/LogisticaDistribuicaoModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_desenvolvimento = $_POST['id_desenvolvimento'];
    $destino            = $_POST['destino'];
    $metodo_envio       = $_POST['metodo_envio'];

    $sql = "INSERT INTO logistica_distribuicao_tecnologia (id_desenvolvimento, destino, metodo_envio)
            VALUES (?, ?, ?)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_desenvolvimento, $destino, $metodo_envio]);

    // Registra a operação no log
    logAction("Logística & Distribuição: Cadastro realizado para desenvolvimento ID {$id_desenvolvimento}, destino '{$destino}', método de envio '{$metodo_envio}'.");

    header("Location: ../../public/pages/logistica_distribuicao_tecnologia.php?success=1");
    exit;
}
?>
