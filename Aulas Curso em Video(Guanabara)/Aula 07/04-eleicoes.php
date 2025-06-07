<?php
    $ano = $_GET["an"];
    $idade = 2025 - $ano;
    echo "Quem nasceu no ano de $ano tem $idade ano(s) de idade. <br>";
    $tipo = ($idade >= 18 && $idade < 65) ? "é OBRIGATORIO" : "NÃO é OBRIGATORIO";
    echo "E dessa forma seu voto $tipo";
