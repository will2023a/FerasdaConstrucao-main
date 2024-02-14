<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feras da Construção</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Feras da Construção</h1>
        <h3>há mais de 10 anos contruindo sonhos com responsabilidade</h3>
        <div id="dono">Dono e fundador: Marcio Barbosa <img id="feras" src="imagens/Feras.png" alt=""></div>
    </header>


    <ul class="lista">
        <li>
            <h5>Especialidades:
        </li>
        </h5>
        <li><img class="topico" src="imagens/estruturas.png" alt="">Estruturas</li>
        <li><img class="topico" src="imagens/laje.png" alt="">Lajes</li>
        <li><img class="topico" src="imagens/alvenaria.png" alt="">Alvenaria</li>
        <li><img class="topico" src="imagens/escadaria.png" alt="">Escada de concreto</li>
        <li><img class="topico" src="imagens/encanamento.png" alt="">Hidrualica</li>
        <li><img class="topico" src="imagens/luminaria.png" alt="">Elétrica</li>
    </ul>

    <div class="menu">

        <div class="one"> Piso realizado com cimento queimado, uma nova maneira de deixar sua area mais bonita e sem
            poeira.
            <br>
            <img class="foto" src="imagens/cimento.webp" alt="">
        </div>
        <div class="two">Churrasqueira feita com tijolo maciço, tecnica e excelencia dos feras.
            <br>
            <br>
            <img class="foto" src="imagens/OIP.jpg" alt="">

        </div>
        <div class="tree">Piso laminado, otima opção para quartos e escritórios, também somos qualificados para atender
            este serviço.
            <br>
            <br>
            <img class="foto" src="imagens/laminado.webp" alt="">

        </div>

        <div class="four">Trabalhamos com telha de ceramica esmaltado, retem calor, dificil de quebrar e de boa
            estética.
            <br>
            <br>
            <img class="foto" src="imagens/telhado.webp" alt="">


        </div>


    </div>
    <div class="bio">

        <div bio2>
            <p id="biotitle">Biografia:
            </p>
            <br>
            Marcio Pinto Barbosa é natural de São Borja, reside a mais de 30 na capital dos gauchos.
            Profissional dedicado e ama o que faz,teve sua formação na Escola Tecnica Parobé e experiencias no Hospital
            Ernesto Dorneles e Polo Petroquimico, pós essas experiencias e tendo na familia muitos contrutores, decidiu
            abrir uma empresa, Feras da construção.
            Então desde 2010 na estrada das contruções a empresa ja deixou muitos clientes contentes e tem como meta
            expandir seus horizontes atendendo outros estados além da capital.
        </div><br>
        <img class="marcio" src="imagens/Captura de tela 2024-02-14 030916.png" alt="">
    </div>


    <div id="formulario" class=ContainerFormulario>
        <h2>Solicite seu Orçamento</h2>
        <form action="processar-orcamento.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <br>
            <label for="celular">Celular:</label>
            <input type="tel" id="celular" name="celular" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="servico">Serviço solicitado:</label>
            <textarea id="servico" name="servico"></textarea>
            <br>
            <input type="submit" class="button" value="Enviar">
        </form>
    </div>

    <div id="popup"
        style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: rgba(0, 0, 0, 0.8); color: #fff; padding: 20px; text-align: center; border-radius: 10px; z-index: 999;">
        <p>Email enviado com sucesso!</p>
        <button id="ok-button">OK</button>
    </div>


</body>

<script src="script.js"></script>
<!-- Caminho para o arquivo JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Verifique se há um parâmetro "enviado" na URL
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has("enviado")) {
            // Se o parâmetro "enviado" estiver presente, exiba o popup
            const popup = document.getElementById("popup");
            popup.style.display = "block";

            // Defina um evento de clique no botão "OK" do popup para fechá-lo
            const okButton = document.getElementById("ok-button");
            okButton.addEventListener("click", function () {
                popup.style.display = "none";
            });
        }
    });
</script>

</html>
