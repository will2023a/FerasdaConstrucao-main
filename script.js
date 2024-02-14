
document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault(); // Evitar o envio padrão do formulário

    // Redirecionar para a página inicial após o envio do formulário
    window.location.href = "index.html?enviado=1";
});
