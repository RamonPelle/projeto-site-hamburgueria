    <?php
    include "header.php";
    require_once "src/HamburguerDAO.php";

    $hamburguerDAO  = new HamburguerDAO();
    $id = $_GET['id'];

        if ($hamburguerDAO->removerHamburguer($id)) {
            echo "<h2>Feito!</h2>";
        } else {
            echo "<h2>Erro na remoção.</h2>";
        }

?>

<br>
<a href="formListarHamburgueres.php"><u>Voltar</u></a>

        <?php
    include "rodape.php";
        ?>