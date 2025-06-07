<?php
/* 
🧠 Exercício 1 – Nível Fácil: Verificação de Maioridade
    Crie um script PHP que:
        1. Receba pela URL a idade de uma pessoa (?idade=...);
        2. Verifique se a pessoa é maior de idade (>= 18);
        3. Exiba uma mensagem:
            - Se for maior ou igual a 18: ✅ “Você é maior de idade.”
            - Se for menor: ⚠️ “Você é menor de idade.”
*/

// Verifica parametros na URL""
if (isset($_GET["a"])){

    $ano_nasc = $_GET["a"];  // Recebe valor da URL:
    $ano_atual = date("Y"); // Recebe valor ano atual do sistema:

    // Calculos:
    $idade = $ano_atual - $ano_nasc;
    if ($idade > 17){
        $check = "✅ Você é maior de idade.";
    } else {
        $check = "⚠️ Você é menor de idade.";
    }

    echo "Você tem $idade ano(s) de idade.<br>";
    echo "$check";

} else {
    echo "<h2>Parâmetro Ano ausentes na URL!";
}
