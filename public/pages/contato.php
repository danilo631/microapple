<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contato | MicroApple SGI</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/contato.css">
</head>
<body>

<header class="bg-primary text-white text-center p-4">
  <h1>Contato</h1>
</header>

<section class="container my-5">
  <form>
    <div class="mb-3">
      <label for="nome" class="form-label">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Seu nome">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">E-mail:</label>
      <input type="email" class="form-control" id="email" placeholder="seu@email.com">
    </div>

    <div class="mb-3">
      <label for="mensagem" class="form-label">Mensagem:</label>
      <textarea class="form-control" id="mensagem" rows="4"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</section>

<footer class="bg-dark text-white text-center p-3">
  © 2025 MicroApple SGI - Todos os direitos reservados
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
