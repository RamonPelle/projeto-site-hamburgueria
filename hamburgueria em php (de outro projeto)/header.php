<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Veggie Verde</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo_menu.css">
    <link rel="icon" type="image/png" sizes="512x512" href="img/green.png">
 
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="index.php">
                <img src="./img/green.png" class="logo">
                <p class="marca">Veggie Verde</p>
                </a>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#hamburguerSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-book"></i>
                        Hamburgueres
                    </a>
                    <ul class="collapse list-unstyled" id="hamburguerSubmenu">
                        <li>
                            <a href="formCadastroHamburgueres.php">Cadastrar Hamburguer</a>
                        </li>
                        <li>
                            <a href="formListarHamburgueres.php">Lista de Hamburgueres</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="contato.php">
                        <i class="fas fa-paper-plane"></i>
                        Contato
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">                    
                    <h1>Sistema de Controle Veggie Verde</h1>
                </div>
            </nav>