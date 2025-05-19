<?php
/*
🧠 Exercício 2 – Nível Médio: Controle de Estoque

Crie um script PHP que simule o controle de estoque de um produto em um pequeno comércio. O programa deve:
1. Definir a variável $estoque com valor inicial de 100 unidades;
2. Receber pela URL:
    - A quantidade de produtos vendidos (vendido)
    - A quantidade de produtos recebidos no novo lote (recebido)
3. Subtrair os produtos vendidos do estoque com -=
4. Adicionar os produtos recebidos ao estoque com +=
5. Exibir:
    - O estoque inicial
    - Quantidade vendida
    - Quantidade recebida
    - O estoque final atualizado
*/

// Verifica se parâmetros entregues na URL:
    if (isset($_GET["vendido"], $_GET["recebido"])){

        // Exibe na tela para o usuário em lista.
        echo "<ul>";
        // Recebe valores pela URL:
        $estoque = (int) 100; // Define estoque com valor inicial de 100 unidade.
        $vendido = (int) $_GET["vendido"]; // Recebe valor vendido pela URL.
        $recebido = (int) $_GET["recebido"]; // Recebe valor recebido pela URL.

        // Exibe na tela para o usuário em lista.
        echo "<ul>";
        echo "<li> Estoque inicial:" . $estoque . "</li>";

        // Calculos:

        echo "<li> Quantidade vendida: " . $vendido . "</li>";
        $estoque -= $vendido; // Subtrai $vendidos do $estoque com atribuição direta.

        echo "<li> Quantidade recebida: "  . $recebido . "</li>";
        $estoque += $recebido; // Adiciona $recebidos ao $estoque com atribuição direta.            
            
        echo "<li><strong> Estoque final atualizado: " . $estoque . "</strong></li>";
        echo "</ul>";


    } else {
        echo "Parametros ausentes na URL!";
    }