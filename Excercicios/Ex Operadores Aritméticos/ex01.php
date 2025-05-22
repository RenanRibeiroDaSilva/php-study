<?php
# 🧠 Exercício 1 – Nível Fácil: Calculadora Simples

# Pega valores pela URL.
$a = (int) $_GET["a"];
$b = (int) $_GET["b"];

# Mostra resultados para o usuário
echo "<h2> Valores recebidos $a e $b. <br> </h2>";

# Visualiza em modo lista
echo "<ul>";
echo "<li>A soma é " . ($a + $b) . "</li>";
echo "<li>A subtração é " . ($a - $b) . "</li>";
echo "<li>A multiplicação é " . ($a * $b) . "</li>";
# Verica e valida se a divisão é por 0.
if ($b != 0){
    echo "<li>A divisão é " . ($a / $b) . "</li>";
    echo "<li>O modulo é " . ($a % $b). "</li>";
} else {
    echo "<li>Não é possivel dividir por zero.";
}
echo "</ul>";
