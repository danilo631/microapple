<?php
include '../../database/conexao.php';
include '../../../public/includes/logger.php'; // atualize o caminho conforme sua estrutura
include '../models/DesenvolvimentoModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_produto          = $_POST['id_produto'];
    $tipo_movimentacao   = $_POST['tipo_movimentacao'];
    $quantidade          = $_POST['quantidade'];

    $sql = "INSERT INTO movimentacoes_estoque (id_produto, tipo_movimentacao, quantidade)
            VALUES (?, ?, ?)";
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_produto, $tipo_movimentacao, $quantidade]);

    // Registra a movimentação
    logAction("Movimentação de Estoque: {$tipo_movimentacao} do Produto ID {$id_produto} com quantidade {$quantidade}.");

    header("Location: ../../frontend/pages/movimentacoes_estoque.php?success=1");
    exit;
}
?>
