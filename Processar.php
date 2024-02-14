<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $servico = $_POST["servico"];

    // Enviar um e-mail
    $to = "wilpo93.wo@gmail.com";
    $subject = "Pedido de orçamento";
    $message = "Nome: $nome\nCelular: $celular\nEmail: $email\nServiço solicitado: $servico";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        // Redirecionar para uma página de confirmação
        header("Location: confirmacao.html");
    } else {
        // Exibir uma mensagem de erro
        echo "Ocorreu um erro ao enviar o e-mail.";
    }
}
?>
