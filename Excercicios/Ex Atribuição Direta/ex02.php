<?php
/*
🧠 Exercício 2 – Nível Médio: Controle de Estoque
Enunciado:
Crie um script PHP que simule o controle de estoque de um produto em um pequeno comércio. O programa deve:
    1.Definir a variável $estoque com valor inicial de 100 unidades;
    2.Receber pela URL:
        - A quantidade de produtos vendidos (vendido)
        - A quantidade de produtos recebidos no novo lote (recebido)

    3.Subtrair os produtos vendidos do estoque com -=
    4.Adicionar os produtos recebidos ao estoque com +=
    5.Exibir:
        - O estoque inicial
        - Quantidade vendida
        - Quantidade recebida
        -O estoque final atualizado
*/

// Verificando se os parâmetros 'vendido(v)' e 'recebido(r)' estão definidos na URL
if (isset($_GET['v']) && isset($_GET['r'])) {
    // Atribuindo os valores recebidos na URL às variáveis
    $vendido = $_GET['v']; // Quantidade de produtos vendidos
    $recebido = $_GET['r']; // Quantidade de produtos recebidos

    // Definindo a variável estoque com valor inicial de 100 unidades
    $estoque = 100;

    // Subtraindo os produtos vendidos do estoque
    $estoque -= $vendido;

    // Adicionando os produtos recebidos ao estoque
    $estoque += $recebido;

    // Exibindo as informações
    echo "<ul>";
    echo "<li>Estoque inicial: 100 unidades</li>";
    echo "<li>Quantidade vendida: $vendido unidades</li>";
    echo "<li>Quantidade recebida: $recebido unidades</li>";
    echo "<li>Estoque final atualizado: $estoque unidades</li>";
    echo "</ul>";
} else {
    echo "Por favor, forneça a quantidade vendida e recebida na URL.";
}
?>
