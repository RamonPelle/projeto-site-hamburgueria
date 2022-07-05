<?php
include "header.php";
require "src/Hamburguer.php";
require "src/HamburguerDAO.php";

$id = $_GET['id'];
$hamburguerDAO = new HamburguerDAO();
$hamburguer = $hamburguerDAO->buscarHamburguer($id);

if(isset($_POST['alterar'])){

        $nome = $_POST['nome'];
        $ingredientes = $_POST['ingredientes'];
        $calorias = $_POST['calorias'];
        $valor = $_POST['valor'];
        
    $id = $_GET['id'];
        
        $hamburguerDAO = new HamburguerDAO();
        $hamburguer = new Hamburguer($nome, $ingredientes, $calorias, $valor);
        $hamburguer->setId($id); 
}
?>

    <h2>Alterar hambúrguer</h2>

    <form action="alterarHamburguer.php?id=<?=$hamburguer['id']?>" method = "POST">

            <label for="nomeInput">Nome: </label>
        <input type="text" name="nome" id="nomeInput" class="input-padrao" size=15 value="<?=$hamburguer['nome']?>">
            <label for="nomeInput">Ingredientes: </label>
        <input type="int" name="ingredientes" id="ingredientesInput" class="input-padrao" size=15 value="<?=$hamburguer['ingredientes']?>">  
            <label for="nomeInput">Calorias: </label>
        <input type="text" name="calorias" id="caloriasInput" class="input-padrao" size=15 value="<?=$hamburguer['calorias']?>"> 
            <label for="nomeInput">Preço: </label>
        <input type="int" name="valor" id="valorInput" class="input-padrao" size=15 value="<?=$hamburguer['valor']?>">  
            

        <button type="submit" id="botaoId" class = "btn btn-info d-flex">Alterar</button>
    </form>


<?php
    include "rodape.php";
?>