<?php
include '../../database/conexao.php';
include '../../../public/includes/logger.php';
include '../models/ControleQualidadeModel.php'; // atualize o caminho conforme sua estrutura

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_desenvolvimento   = $_POST['id_desenvolvimento'];
    $teste_funcionalidade = $_POST['teste_funcionalidade'];
    $teste_usabilidade    = $_POST['teste_usabilidade'];

    $sql = "INSERT INTO controle_qualidade_tecnologia (id_desenvolvimento, teste_funcionalidade, teste_usabilidade)
            VALUES (?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_desenvolvimento, $teste_funcionalidade, $teste_usabilidade]);

    // Registra a operação no log
    logAction("Controle de Qualidade: Cadastro realizado para desenvolvimento ID {$id_desenvolvimento}.");

    header("Location: ../../frontend/pages/controle_qualidade.php?success=1");
    exit;
}
?>
