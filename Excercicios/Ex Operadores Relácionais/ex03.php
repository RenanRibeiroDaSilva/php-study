<?php
/*
🧠 Exercício 3 – Nível Avançado: Validação de Login com Verificação de Tipo
    Crie um script PHP que simule o processo de login de um sistema simples. O script deve:
        1. Armazenar os dados reais de login em duas variáveis:
            - $usuario_correto = "admin" (string)
            - $senha_correta = 1234 (número)
            - Receber pela URL (?usuario=...&senha=...) os dados informados pelo usuário.
        2. Validar:
            - Se usuario e senha coincidem em valor e tipo (use ===);
            - Se o usuário está correto, mas a senha está errada;
            - Se a senha está correta, mas o usuário está errado;
            - Se ambos estão errados. 
        3. Exibir uma mensagem clara para cada caso, como:
            ✅ “Login realizado com sucesso!” 
            ⚠️ “Usuário correto, mas senha inválida.”
            ⚠️ “Senha correta, mas usuário inválido.”
            ❌ “Usuário e senha incorretos.”
*/

if (isset($_GET["u"], $_GET["s"])){

    // Variávei:
    $login = $_GET["u"];
    $senha = (int) $_GET["s"];
    $usuario_correto = (string)"admin";
    $senha_correta = (int)1234;

    // Valida Usuário: 
    if ($login === $usuario_correto and $senha === $senha_correta){
        $acesso = "✅ “Login realizado com sucesso!”";
    } elseif ($login === $usuario_correto and $senha !== $senha_correta){
        $acesso = "⚠️ “Usuário correto, mas senha inválida.”";
    } elseif ($login !== $usuario_correto and $senha === $senha_correta){
        $acesso = "⚠️ “Senha correta, mas usuário inválido.”";
    } else {
        $acesso = "❌ “Usuário e senha incorretos.”";
    }

    echo "<h1>$acesso</h1>";

} else {
    echo "Parâmetros ausentes na URL!";
}