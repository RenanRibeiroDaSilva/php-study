<?php
/*
🧠 Exercício 3 – Nível Avançado: Simulação de Caixa com Saques
Você vai criar um script PHP que simula um caixa eletrônico que só trabalha com notas de R$ 100, R$ 50, R$ 20 e R$ 10.
O programa deve:
    1. Definir uma variável $valor com um valor de saque passado pela URL (?saque=...);
    2. Calcular quantas notas de cada tipo devem ser entregues, sempre do maior valor para o menor;
    3. Usar os operadores de atribuição /= e %= para calcular a quantidade de notas e o restante do valor;
    4. Exibir o valor solicitado e a quantidade de cada nota entregue.
*/

// Verifica parametros recebidos pela URL:

if (isset ($_GET["saque"])){

    // Recebe valor pela URL:
    $saque = (int)$_GET["saque"];
    $sacado = $saque;

    // Define notas disponiveis:
    $notas100 = $saque / 100;
    $saque %= 100;

    $notas50 = $saque / 50;
    $saque %= 50;

    $notas20 = $saque / 20;
    $saque %= 20;

    $notas10 = $saque / 10;
    $saque %= 10;

    $notas5 = $saque / 5;
    $saque %= 5;

    // Exibe os resultados
    echo "<h3>Valor do saque: R$" . number_format($sacado, 2, ",", ".") . "</h3>";
    echo "<ul>";
    echo "<li>" . intval($notas100) . " notas(s) de R$100</li>";
    echo "<li>" . intval($notas50) . " notas(s) de R$50</li>";
    echo "<li>" . intval($notas20) . " notas(s) de R$20</li>";
    echo "<li>" . intval($notas10) . " notas(s) de R$10</li>";
    echo "<li>" . intval($notas5) . " notas(s) de R$5</li>";
    echo "</ul>";

} else {
    echo "Parametros ausentes na URL!";
}
