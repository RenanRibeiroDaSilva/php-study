<?php
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não Informado]";
    $ano = isset($_GET["ano"]) ? (int) $_GET["ano"] : 0;
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Não Selcecionado]";
    $ano_atual = date("Y");
    $idade = isset($_GET["ano"]) ? $ano_atual - $ano : 0;

    echo "$nome é $sexo e tem $idade anos. <br>";
?>

<a href="02-exercicio.html">Voltar</a>
