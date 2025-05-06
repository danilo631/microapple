<?php
session_start();

// Carrega os usuários e senhas do arquivo
$usuarios = include 'usuarios.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Verifica se o usuário existe e se a senha está correta
    if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $senha) {
        $_SESSION['usuario'] = $usuario;  // Armazena o nome do usuário na sessão
        $_SESSION['logado'] = true;        // Marca como logado
        header('Location: ./pages/dashboard.php');  // Redireciona para o dashboard
        exit;
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - MicroApple SGI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Login - MicroApple SGI</h2>
    <?php if (isset($erro)) echo "<div class='alert alert-danger'>$erro</div>"; ?>
    <form method="POST">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuário:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
</body>
</html>
