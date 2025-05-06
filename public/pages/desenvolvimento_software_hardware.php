<?php
session_start();

// Verifica se o usuário não está logado
if (!isset($_SESSION['usuario']) || !isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    // Redireciona o usuário para a página de login
    header("Location: ../index.php");
    exit;
}


include '../includes/header.php'; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MicroApple SGI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="../index.php">Início</a></li>
        <li class="nav-item"><a class="nav-link" href="./produtos.php">Produtos</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">Desenvolvimento</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h2>Cadastro de Desenvolvimento (Software / Hardware)</h2>

    <?php
    if (isset($_GET['sucesso']) && $_GET['sucesso'] === '1') {
        echo '<div class="alert alert-success">Cadastro realizado com sucesso!</div>';
    }
    ?>

    <form action="../../backend/controllers/DesenvolvimentoController.php" method="POST">
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo (Software ou Hardware):</label>
            <input type="text" class="form-control" id="tipo" name="tipo" required>
        </div>
        <div class="mb-3">
            <label for="versao" class="form-label">Versão:</label>
            <input type="text" class="form-control" id="versao" name="versao" required>
        </div>
        <div class="mb-3">
            <label for="equipe_desenvolvimento" class="form-label">Equipe de Desenvolvimento:</label>
            <textarea class="form-control" id="equipe_desenvolvimento" name="equipe_desenvolvimento" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <hr>

    <h4 class="mt-5">Desenvolvimentos Cadastrados</h4>

    <?php
    include '../../backend/config/db.php';

    try {
        $sql = "SELECT * FROM desenvolvimento_software_hardware";
        $stmt = $pdo->query($sql);

        if ($stmt->rowCount() > 0) {
            echo '<table class="table table-bordered mt-3">';
            echo '<thead><tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Versão</th>
                    <th>Equipe de Desenvolvimento</th>
                </tr></thead><tbody>';
            
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['id']) . '</td>';
                echo '<td>' . htmlspecialchars($row['tipo']) . '</td>';
                echo '<td>' . htmlspecialchars($row['versao']) . '</td>';
                echo '<td>' . nl2br(htmlspecialchars($row['equipe_desenvolvimento'])) . '</td>';
                echo '</tr>';
            }

            echo '</tbody></table>';
        } else {
            echo '<p class="mt-3 text-muted">Nenhum desenvolvimento cadastrado ainda.</p>';
        }
    } catch (PDOException $e) {
        echo '<div class="alert alert-danger mt-3">Erro ao buscar dados: ' . $e->getMessage() . '</div>';
    }
    ?>
</div>

<?php include '../includes/footer.php'; ?>
