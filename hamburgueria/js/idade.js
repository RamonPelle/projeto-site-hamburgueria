var botao = document.querySelector("#botao");

botao.addEventListener("click", function(event) {
    var nome = document.getElementById("inputname");
    var idade = document.getElementById("inputidade");
    var msg = document.getElementById("mensagem");
    if(idade.value >= 18)
        msg.innerHTML = nome.value + ", você é maior de idade";
    else{
        msg.innerHTML = nome.value +", você é menor de idade";
        msg.classList.add("destaque");
    }    
    
});