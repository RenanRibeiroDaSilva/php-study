<?php

    $a = 3;
    $b = "3";

    $r = ($a == $b) ? "SIM" : "NÃO"; // == igual (mesmo valor, tipo diferente)
    echo "As variáveis A e B são igual? $r"; 

    $i = ($a === $b) ? "SIM" : "NÃO"; // === idêntico (mesmo valor, mesmo tipo)
    echo "<br>As variáveis A e B são idênticas? $i";
