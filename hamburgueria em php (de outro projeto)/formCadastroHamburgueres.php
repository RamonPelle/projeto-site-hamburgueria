    <?php
        include "header.php";
        require_once "src/Hamburguer.php";
        require_once "src/HamburguerDAO.php";
    ?>

        <h2>Cadastro Hamburgueres</h2>
        <form action="cadastroHamburgueres.php">
                <label for="nomeInput">Nome: </label>
            <input type="text" name="nome" id="nomeInput" class="input-padrao" size=15>

                <label for="nomeInput">Ingredientes: </label>
            <input type="text" name="ingredientes" id="ingredientesInput" class="input-padrao" size=15>

                <label for="nomeInput">Calorias: </label>
            <input type="text" name="calorias" id="caloriasInput" class="input-padrao" size=15>

                <label for="nomeInput">Valor: </label>
            <input type="float" name="valor" id="valorInput" class="input-padrao" size=15>

            <button type="submit" id="botaoId" class="btn btn-info d-flex">Cadastrar</button>
        </form>

    <?php
    include "rodape.php";
    ?>