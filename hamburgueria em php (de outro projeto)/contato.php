<?php
include "header.php";
?>

<div class="conteudo">

<form class="form2">
                   <div class="h7"> Preencha que nós entramos em contato com você!</div>
                    <ul>
                        <li class="listaform">
                            <label for="nomeInput">Nome completo: </label>
                            <input type="text" name="nome" id="nomeInput" class="input-p" required="true">
                        </li>
                        <li class="listaform">   
                            <label for="emailInput">Email:</label>
                            <input type="email" name="email" id="emailInput" class="input-p" placeholder="email@dominio.com.br">
                        </li>
                        <li class="listaform">
                            <label for="foneInput">Telefone:</label>
                            <input type="tel" name="fone" id="foneInput" class="input-p" placeholder="(xx) xxxxx-xxxx"> 
                        </li> 
                        <li class="listaform">
                            <label for="nascimentoInput">Mensagem:</label>
                            <input type="text" name="mensage" class="input-p" id="mensageInput">
                        </li>
                    </ul>
                    <fieldset>
                        <legend class="legenda">Como prefere ser contactado?
                        </legend>
                        <label class="label2">
                            <input type="radio" name="email" value="email">
                            Email
                        </label>
                        <label class="label2">
                            <input type="radio" name="telefone" value="telefone">
                            Telefone 
                        </label>
                        <label class="label2">
                            <input type="radio" name="whatsapp" value="whatsapp">
                            Whatsapp
                        </label>
                    </fieldset>
                    <fieldset class="horario">
                        <legend class="legenda">Horário que Prefere ser Contactado:
                            <select name="estado" id="estadoI" class="estado">
                                <option class="estado" >Manhã</option>
                                <option class="estado">Meio dia</option>
                                <option class="estado">Início da Tarde</option>
                                <option class="estado">Fim da Tarde/option>
                            </select>
                        </legend>
                    </fieldset>
                    <label for="informacoesId" class="info">Mais informações:</label>
                    <textarea name="informacoes" id="informacoesId" cols="40" rows="5" ></textarea>
        
                    <button type="button" id="botaoId" class="btn btn-info d-flex">Enviar</button>
        
                </form>
</div>
<?php
include "rodape.php";
?>