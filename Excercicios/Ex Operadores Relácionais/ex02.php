<?php
/*
🧠 Exercício 2 – Nível Médio: Comparação entre Tipos
    Crie um script PHP que:
        1. Defina duas variáveis:
            - $a = "10" (string)
            - $b = 10 (inteiro)
        2. Compare as duas variáveis com os operadores:
            - == (igualdade de valor)
            - === (igualdade de valor e tipo)
            - != (diferente em valor)
            - !== (diferente em valor ou tipo)
        3. Exiba mensagens informando o resultado de cada comparação, por exemplo:
            - "As variáveis são iguais em valor."
            - "As variáveis são diferentes em tipo."
*/

// Variáveis:
$a = (string) "10";
$b = (int) 10;

// Verifica valores e tipos e  exibe na tela para o usuário:

    echo "<h2>\$a = \"$a\" (" . gettype($a) . ")</h2>";
    echo "<h2>\$b = $b (" . gettype($b) . ")</h2>";

    // Checa se os valores são iguais.
    if ($a == $b){
        $valor_igual = " → Verdadeiro";
    } else {
        $valor_igual = " → Falso";
    }

    // Checa se os tipos são iguais.
    if ($a === $b){
        $tipo_igual = " → Verdadeiro";
    } else {
        $tipo_igual = " → Falso";
    }

    // Checa se os valores são diferentes.
    if ($a != $b){
        $valor_diferente = " → Verdadeiro";
    } else {
        $valor_diferente = " → Falso";
    }

    // Checa se os tipos são diferentes.
    if ($a !== $b){
        $tipo_diferente = " → Verdadeiro";
    } else {
        $tipo_diferente = " → Falso";
    }

    echo "<ul>";
    echo "<li>\$a == \$b$valor_igual</li>";
    echo "<li>\$a === \$b$tipo_igual</li>";
    echo "<li>\$a != \$b$valor_diferente</li>";
    echo "<li>\$a !==  \$b$tipo_diferente</li>";
    echo "</ul>";
