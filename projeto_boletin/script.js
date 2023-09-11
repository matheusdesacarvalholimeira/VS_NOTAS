function verificarAprovacao() {
    const entrada1 = document.querySelector("#ent1").value;
    const entrada2 = document.querySelector("#ent2").value;
    const entrada3 = document.querySelector("#ent3").value;
    const resultado = document.querySelector("#resultado");

    if (entrada1 == "A" && entrada2 == "A" && entrada3 == "PA") {
        resultado.textContent = "MENSAO ALUNO D";
    } else if (entrada1 == "A" && entrada2 == "PA" && entrada3 == "NA") {
        resultado.textContent = "ND";
    } else if (entrada1 == "A" && entrada2 == "A" && entrada3 == "A") {
        resultado.textContent = "Aprovado";
    } else if (entrada1 == "PA" && entrada2 == "PA" && entrada3 == "A") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "NA" && entrada2 == "NA" && entrada3 == "A") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "A" && entrada2 == "A" && entrada3 == "NA") {
        resultado.textContent = "Aprovado";
    } else if (entrada1 == "A" && entrada2 == "NA" && entrada3 == "A") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "A" && entrada2 == "NA" && entrada3 == "NA") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "A" && entrada2 == "NA" && entrada3 == "PA") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "A" && entrada2 == "PA" && entrada3 == "A") {
        resultado.textContent = "Aprovado";
    } else if (entrada1 == "A" && entrada2 == "PA" && entrada3 == "PA") {
        resultado.textContent = "Aprovado";
    } else if (entrada1 == "NA" && entrada2 == "A" && entrada3 == "A") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "NA" && entrada2 == "A" && entrada3 == "PA") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "NA" && entrada2 == "NA" && entrada3 == "PA") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "NA" && entrada2 == "PA" && entrada3 == "A") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "NA" && entrada2 == "PA" && entrada3 == "NA") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "NA" && entrada2 == "PA" && entrada3 == "PA") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "PA" && entrada2 == "A" && entrada3 == "A") {
        resultado.textContent = "Aprovado";
    } else if (entrada1 == "PA" && entrada2 == "A" && entrada3 == "NA") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "PA" && entrada2 == "A" && entrada3 == "PA") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "PA" && entrada2 == "NA" && entrada3 == "A") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "PA" && entrada2 == "NA" && entrada3 == "NA") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "PA" && entrada2 == "NA" && entrada3 == "PA") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "PA" && entrada2 == "PA" && entrada3 == "NA") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "PA" && entrada2 == "PA" && entrada3 == "PA") {
        resultado.textContent = "RECUPERAÇÃO";
    } else if (entrada1 == "PA" && entrada2 == "A" && entrada3 == "A") {
        resultado.textContent = "Aprovado";
    } else {
        resultado.textContent = "Insira um valor válido";
    }
}
  

  document.querySelector(".enviar").addEventListener("click", verificarAprovacao);

  // Captura o elemento do resultado
var resultadoElement = document.getElementById("resultadoValor");

// Captura o botão de salvar
var salvarBotao = document.getElementById("salvarResultado");

// Adiciona um evento de clique ao botão de salvar
salvarBotao.addEventListener("click", function() {
    // Captura o valor do resultado
    var valorResultado = resultadoElement.textContent;

    // Envia o valor para o servidor (você pode usar AJAX ou um formulário para isso)
    // Por exemplo, usando AJAX com JavaScript puro:
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "cadastro.php", true); // Substitua "salvar_resultado.php" pelo seu script PHP de salvamento
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    // Os dados a serem enviados, neste caso, estamos enviando o valor do resultado
    var data = "resultado=" + encodeURIComponent(valorResultado);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Resposta do servidor
            console.log(xhr.responseText);
            alert("Resultado salvo com sucesso!");
        }
    };

    // Envie os dados para o servidor
    xhr.send(data);
});