<?php include '../includes/header.php'; ?>
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
    <form action="../../backend/controllers/desenvolvimentoController.php" method="POST">
        <div class="mb-3">
            <label for="tipo" class="form-label">Id (Identificador único do desenvolvimento):</label>
            <input type="text" class="form-control" id="tipo" name="tipo" required>
        </div>
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
</div>

<?php include '../includes/footer.php'; ?>
