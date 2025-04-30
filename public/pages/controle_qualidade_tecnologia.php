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
        <li class="nav-item"><a class="nav-link" href="./clientes.php">Clientes</a></li>
        <li class="nav-item"><a class="nav-link" href="./produtos.php">Produtos</a></li>
        <li class="nav-item"><a class="nav-link active" href="#">Controle de Qualidade</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
    <h2>Controle de Qualidade - Tecnologia</h2>
    <form action="../../backend/controllers/controleQualidadeController.php" method="POST">
        <div class="mb-3">
            <label for="id_desenvolvimento" class="form-label">ID do Desenvolvimento:</label>
            <input type="number" class="form-control" id="id_desenvolvimento" name="id_desenvolvimento" required>
        </div>
        <div class="mb-3">
            <label for="teste_funcionalidade" class="form-label">Teste de Funcionalidade:</label>
            <input type="text" class="form-control" id="teste_funcionalidade" name="teste_funcionalidade" required>
        </div>
        <div class="mb-3">
            <label for="teste_usabilidade" class="form-label">Teste de Usabilidade:</label>
            <input type="text" class="form-control" id="teste_usabilidade" name="teste_usabilidade" required>
        </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>
