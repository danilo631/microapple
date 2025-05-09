<?php
session_start();

// Verifica se o usuário não está logado
if (!isset($_SESSION['usuario']) || !isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    // Redireciona o usuário para a página de login
    header("Location: ../index.php");
    exit;
}


include '../includes/header.php'; ?>
<div class="container mt-5">
    <h1 class="mb-4">MicroApple</h1>
    <div class="row">
        <!-- Clientes -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Controle de Qualidade</h5>
                    <p class="card-text"> Faça o cadastro do Controle de Qualidade.</p>
                    <a href="./controle_qualidade_tecnologia.php" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>
        <!-- Produtos -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Desenvolvimento_software_Hardware</h5>
                    <p class="card-text">Faça o Cadastro da equipe de Desenvolvimeno.</p>
                    <a href="./desenvolvimento_software_hardware.php" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>
        <!-- Vendas -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Logistica Distribuicaco tecnologia</h5>
                    <p class="card-text">Acompanhe as Vendas realizadas.</p>
                    <a href="./logistica_distribuicao_tecnologia.php" class="btn btn-primary">Acessar</a>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
<?php include '../includes/footer.php'; ?>
