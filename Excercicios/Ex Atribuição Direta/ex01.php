<?php
    /*
    🧠 Exercício 1 – Nível Fácil: Atualização de Pontuação
    Enunciado:
    Crie um script PHP que simule um sistema de pontuação simples para um jogador. O programa deve:
    1. Definir uma variável $pontos com valor inicial de 0;
    2. Adicionar 10 pontos usando o operador +=;
    3. Subtrair 2 pontos como penalidade com o operador -=;
    4. Multiplicar a pontuação final por 2 (bônus) com o operador *=;
    5. Exibir a pontuação final do jogador com uma mensagem clara.
    */

    echo "<ul>";
    
    # Atribuições diretas de variáveis:
    $pontos = (int) 0;
    echo "<li>Pontuação inicial: $pontos</li>";

    # Adiciona 10 pontos usando operador +=:
    $pontos += (int) 10;
    echo "<li>Ganhou 10 pontos -> $pontos</li>";

    # Subtrai 2 pontos como penalidade com operador -=:
    $pontos -= (int) 2;
    echo "<li>Perdeu 2 ponto -> $pontos</li>";

    # Multiplica a pontuação final por 2 (bonus) com operador *=:
    $pontos *= (int) 2;
    echo "<li>Recebeu bônus (x2) -> $pontos</li>";

    # Exibe a pontuação final do jogador com uma mensagem clara:
    echo "<li><strong>Pontuação final do jogador: $pontos</strong></li>";

    echo"</ul>";
