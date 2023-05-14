<?php

//Chama a conexão 
// require "./conexao.php";

//Faz o requerimento dos usuários
include "dados/users.php";

//Fuso-Horário(São Paulo)
date_default_timezone_set('America/Sao_Paulo');

require "dados/traducMeses.php";

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">    
    <link rel="stylesheet" href="./css/dashboard_styles.css">
    <link rel="stylesheet" href="./css/darkMode_styles.css">
    <!-- Boxicons CDN Link -->
    <link rel="shortcut icon" href="dashboard/img/iconeDash.svg">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="css/tabela.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações</title>
</head>

<body id="body-pd">
    <!-- Header -->
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="btn-dark-mode">
            <div class="checkbox">
                <input type="checkbox" id="switch" value="1" onclick="darkMode()">
                <label for="switch"></label>
            </div>
        </div>  
    </header>
    <!-- Navbar Lateral -->
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav_logo">
                    <i class='bx bx-layer nav_logo-icon'></i>
                    <span class="nav_logo-name">Dashboard Admin</span>
                </a>
                <div class="nav_list">
                    <a href="index.php?page=dashboard/painel" class="nav_link">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Painel de Controle</span>
                    </a>
                    <a href="index.php?page=dashboard/pedidos" class="nav_link">
                        <i class='bx bx-message-check'></i>
                        <span class="nav_name">Pedidos</span>
                    </a>
                    <a href="index.php?page=dashboard/funcionarios" class="nav_link">
                        <i class='bx bx-face'></i>
                        <span class="nav_name">Funcionários</span>
                    </a>
                    <a href="index.php?page=dashboard/config" class="nav_link active">
                        <i class='bx bx-cog'></i>
                        <span class="nav_name">Configurações</span>
                    </a>
                </div>
            </div>
            <!-- Botão de sair -->
            <a href="./index.php?page=perfil" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i>
                <span class="nav_name">Sair</span>
            </a>
        </nav>
    </div>
    <!--Container Principal-->
    <div class="height-100">
        <div class="title">
            <h1 class="text-start">Configurações</h1>
        </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Inserir funcionário</h4>
                        </div>
                        <div class="card-body">
                            <form action="dashboard/dados/registra_produtos.php" class="form">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control outline-none mb-3" placeholder="Nome*">
                                    <input type="numer" class="form-control outline-none mb-3" placeholder="Função*">
                                    <input type="text" class="form-control outline-none mb-3" placeholder="Telefone*">
                                    <input type="text" class="form-control outline-none mb-3" placeholder="Salário*">
                                    <button class="btn bg-success text-light outline-none">Inserir</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Inserir produto</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control outline-none" placeholder="Nome*">
                                <input type="numer" class="form-control outline-none" placeholder="Quantidade*">
                                <button class="btn bg-success text-light outline-none">Inserir</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <script src="dashboard/js/darkMode.js"></script>
    <script src="dashboard/js/script.js"></script>
</body>

</html>