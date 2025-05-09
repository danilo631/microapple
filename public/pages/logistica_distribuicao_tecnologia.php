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
      <li class="nav-item"><a class="nav-link" href="./dashboard.php">Início</a></li>
        <li class="nav-item"><a class="nav-link" href="./desenvolvimento_software_hardware.php">desenvolvimento</a></li>
        <li class="nav-item"><a class="nav-link active" href="./controle_qualidade_tecnologia.php">controle</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h2>Logística e Distribuição - Tecnologia</h2>

    <?php
    if (isset($_GET['sucesso']) && $_GET['sucesso'] === '1') {
        echo '<div class="alert alert-success">Cadastro realizado com sucesso!</div>';
    }
    ?>

    <form action="../../backend/controllers/logisticaDistribuicaoController.php" method="POST">
        <div class="mb-3">
            <label for="id_desenvolvimento" class="form-label">ID do Desenvolvimento:</label>
            <input type="number" class="form-control" id="id_desenvolvimento" name="id_desenvolvimento" required>
        </div>
        <div class="mb-3">
            <label for="destino" class="form-label">Destino:</label>
            <input type="text" class="form-control" id="destino" name="destino" required>
        </div>
        <div class="mb-3">
            <label for="metodo_envio" class="form-label">Método de Envio:</label>
            <input type="text" class="form-control" id="metodo_envio" name="metodo_envio" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <hr>

    <h4 class="mt-5">Distribuições Cadastradas</h4>

    <?php
    include '../../backend/config/db.php';

    try {
        $sql = "SELECT * FROM logistica_distribuicao_tecnologia";
        $stmt = $pdo->query($sql);

        if ($stmt->rowCount() > 0) {
            echo '<table class="table table-bordered mt-3">';
            echo '<thead><tr>
                    <th>ID</th>
                    <th>ID Desenvolvimento</th>
                    <th>Destino</th>
                    <th>Método de Envio</th>
                  </tr></thead><tbody>';

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['id']) . '</td>';
                echo '<td>' . htmlspecialchars($row['id_desenvolvimento']) . '</td>';
                echo '<td>' . htmlspecialchars($row['destino']) . '</td>';
                echo '<td>' . htmlspecialchars($row['metodo_envio']) . '</td>';
                echo '</tr>';
            }

            echo '</tbody></table>';
        } else {
            echo '<p class="mt-3 text-muted">Nenhuma distribuição cadastrada ainda.</p>';
        }
    } catch (PDOException $e) {
        echo '<div class="alert alert-danger">Erro ao carregar os dados: ' . $e->getMessage() . '</div>';
    }
    ?>
</div>

<?php include '../includes/footer.php'; ?>
