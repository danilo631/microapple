<?php
include '../config/db.php';
include '../../public/includes/logger.php';
include '../models/DesenvolvimentoModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo                = $_POST['tipo'] ?? null;
    $versao              = $_POST['versao'] ?? null;
    $equipe_desenvolvimento = $_POST['equipe_desenvolvimento'] ?? null;

    if ($tipo && $versao && $equipe_desenvolvimento) {
        $sql = "INSERT INTO desenvolvimento_software_hardware (tipo, versao, equipe_desenvolvimento)
                VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$tipo, $versao, $equipe_desenvolvimento]);

        logAction("Novo desenvolvimento cadastrado: Tipo {$tipo}, Versão {$versao}.");

        header("Location: ../../public/pages/desenvolvimento_software_hardware.php?success=1");
        exit;
    } else {
        echo "Erro: Todos os campos são obrigatórios.";
    }
}
?>
