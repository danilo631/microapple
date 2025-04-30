<?php
require_once 'config/db.php';

function listarDesenvolvimentos() {
    global $pdo;
    $sql = "SELECT * FROM desenvolvimento_software_hardware";
    return $pdo->query($sql)->fetchAll();
}

function cadastrarDesenvolvimento($nome_projeto, $tipo, $responsavel, $status, $data_inicio, $data_previsao) {
    global $pdo;
    $sql = "INSERT INTO desenvolvimento_software_hardware (nome_projeto, tipo, responsavel, status, data_inicio, data_previsao)
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome_projeto, $tipo, $responsavel, $status, $data_inicio, $data_previsao]);
}

function atualizarDesenvolvimento($id, $nome_projeto, $tipo, $responsavel, $status, $data_inicio, $data_previsao) {
    global $pdo;
    $sql = "UPDATE desenvolvimento_software_hardware 
            SET nome_projeto=?, tipo=?, responsavel=?, status=?, data_inicio=?, data_previsao=?
            WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome_projeto, $tipo, $responsavel, $status, $data_inicio, $data_previsao, $id]);
}

function excluirDesenvolvimento($id) {
    global $pdo;
    $sql = "DELETE FROM desenvolvimento_software_hardware WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
}
?>
