<?php

    include "header.php";
    require_once "src/Hamburguer.php";
    require_once "src/HamburguerDAO.php";

        $nome = $_GET['nome'];
        $ingredientes = $_GET['ingredientes'];    
        $calorias = $_GET['calorias'];
        $valor = $_GET['valor'];

    $hamburguer = new Hamburguer($nome, $ingredientes, $calorias, $valor);
    $hamburguerDAO = new HamburguerDAO();

    //verificacao
    if ($hamburguerDAO->inserirHamburguer($hamburguer))
            echo "<h2>Feito!</h2>";
    else
            echo "<h2>Erro na inserção do novo hamburguer.</h2>";
    ?>

    <br>
    <a href="formListarHamburgueres.php" ><u>Lista de hamburguers</u></a>


    <?php
    include "rodape.php";
?>