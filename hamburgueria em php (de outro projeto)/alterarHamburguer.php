<?php
        include "header.php";
        require_once "src/HamburguerDAO.php";
        require_once "src/Hamburguer.php";

        $nome = $_POST['nome'];
        $ingredientes = $_POST['ingredientes'];
        $calorias = $_POST['calorias'];
        $valor = $_POST['valor'];
        $id = $_GET['id'];

            $hamburguerDAO = new HamburguerDAO();
            $hamburguer = new Hamburguer($nome, $ingredientes, $calorias, $valor);
            $hamburguer->setId($id); //pega o id da url e define aqui para alterar

         // verificar se alterou ou nao

        if ($hamburguerDAO->alterarHamburguer($hamburguer)) {
             echo "<h2>Feito!</h2>";
        } else {
                echo "<h2>Erro na alteração.</h2>";
        }
        ?>

        <br>

        
        <a href="formListarHamburgueres.php"><u>Voltar</u></a>


        <?php
        include "rodape.php";
?>