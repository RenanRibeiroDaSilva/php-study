<?php
/*
🧠 Exercício 2 – Nível Médio: Média Aritmética com Avaliação
Enunciado:
Crie um script em PHP que:
- Receba três notas de um aluno pela URL (ex: ?n1=7&n2=8.5&n3=6);
- Calcule a média aritmética simples dessas três notas;
- Exiba o valor da média com duas casas decimais;
- Exiba uma mensagem de acordo com a média:
    - Se a média for maior ou igual a 7.0, mostrar: ✅ "Aluno aprovado!"
    - Se for entre 5.0 e 6.9, mostrar: ⚠️ "Aluno em recuperação."
    - Se for menor que 5.0, mostrar: ❌ "Aluno reprovado."
*/

# Verifica se os parâmetros foram passados corretamente:
if (isset($_GET["a"], $_GET["x"], $_GET["y"], $_GET["z"])){
    # Recebe váriaveis via URL:
    $aluno = $_GET["a"];
    $n1 = (float) $_GET["x"];
    $n2 = (float) $_GET["y"];
    $n3 = (float) $_GET["z"];

    # Calcula média:
    $media = ($n1 + $n2 + $n3) / 3;

    echo "<h2>As notas do aluno $aluno são $n1, $n2 e $n3</h2>";

    echo "<ul>";
    echo "<li>Média do aluno " . $aluno . " é igual a " . number_format($media, 2, ",", ".") . "</li>";
    echo "</ul>";

    if ($media >= 7){
        echo "✅ Aluno aprovado!";
    } 
    elseif ($media < 7 && $media >= 5){
        echo "⚠️ Aluno em recuperação.";
    } else {
        echo "❌ Aluno reprovado";
    }
} else {
    echo "Parâmetros ausentes na URL!";
}

