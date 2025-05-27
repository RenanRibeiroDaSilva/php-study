<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação</title>

    <?php
        // Variável:
        $nome = isset($_GET["n"]) && (trim($_GET["n"]) !== "") 
        ? $_GET["n"]
        : "Volte e digite seu nome, por gentileza.";
    ?>
</head>
<body>
    <?php
        // Exibe na tela para o usuário.
        if(isset($_GET["n"]) && (trim($_GET["n"]) !== "")){
            echo "Olá $nome! Seja bem vindo(a) ao nosso site! <br>";
        } else {
            echo "$nome <br>";
        }
    ?>    

    <!-- Volta para o formulario.html: -->
        <a href="formulario.html">Voltar</a>
</body>
</html>