<?php


include "header.php";
require_once "src/HamburguerDAO.php";

$hamburguerDAO  = new HamburguerDAO();
$hamburgueres = $hamburguerDAO->buscarHamburgueres();

?>


<table>


    <tr>
        <th>Nome</th>
        <th>Ingredientes</th>
        <th>Calorias</th>
        <th>Valor</th>

        <th>###</th>

    </tr>

    <?php
    foreach ($hamburgueres as $hamburgueresVet) {
    ?>

            <tr>
                <td><?= $hamburgueresVet['nome'] ?></td>
                <td><?= $hamburgueresVet['ingredientes'] ?></td>
                <td><?= $hamburgueresVet['calorias'] ?></td>
                <td><?= $hamburgueresVet['valor'] ?></td>
                
                <td><a href="formAlterarHamburgueres.php?id=<?= $hamburgueresVet['id'] ?>" class="btn btn-secondary btn-sm">Alterar</a>
                    <a href="removerHamburguer.php?id=<?= $hamburgueresVet['id'] ?>" class="btn btn-danger btn-sm">Remover</a></td>
            </tr>

            <?php   
    } ?>

</table>

<?php
include "rodape.php";
?>