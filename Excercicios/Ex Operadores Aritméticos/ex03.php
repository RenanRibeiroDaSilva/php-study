
<?php
/*
🧠 Exercício 3 – Nível Avançado: Folha de Pagamento com Descontos
Enunciado:
Crie um script PHP que simule o cálculo de uma folha de pagamento simples. Seu programa deverá:
* Receber pela URL:
    - Nome do funcionário (nome)
    - Valor da hora trabalhada (valor)
    - Total de horas trabalhadas no mês (horas)
* Calcular:
    - Salário bruto = valor * horas
    - Desconto do INSS:
        + 8% se o salário bruto for até R$ 1.500
        + 9% se for entre R$ 1.500,01 e R$ 2.500
        + 11% se for acima de R$ 2.500
    - Salário líquido = salário bruto - desconto
* Exibir as informações em uma lista ou tabela:
*/

if (isset($_GET["f"], $_GET["h"], $_GET["v"])){

    # Recebe os valores:
    $funcionario = (string) $_GET["f"];
    $hora_trabalhada = (float) $_GET["h"];
    $vl_hr_trabalhada = (float) $_GET["v"];

    # Exceculta os calculos:
    $sal_bruto = $hora_trabalhada * $vl_hr_trabalhada;
    
    // Descontos:
    if($sal_bruto <= 1500){

        // 8% se o salário bruto for até R$ 1.500
        $desc = 8;
        $val_desc = $sal_bruto * ($desc / 100);
        $sal_liquido = $sal_bruto - ($sal_bruto * ($desc / 100));

    } elseif ($sal_bruto > 1500 && $sal_bruto <= 2500) {

        // 9% se for entre R$ 1.500,01 e R$ 2.500
        $desc = 9;
        $val_desc = $sal_bruto * ($desc / 100);
        $sal_liquido = $sal_bruto - ($sal_bruto * ($desc / 100));

    } else {

        // 11% se for acima de R$ 2.500
        $desc = 11;
        $val_desc = $sal_bruto * ($desc / 100);
        $sal_liquido = $sal_bruto - ($sal_bruto * ($desc / 100));
    }

    # Exibe valores para usuário:
    echo "<h2>Folha de Pagamento de $funcionario</h2>";
    echo "<ul>";
    echo "<li>Valor da hora: R$" . number_format($vl_hr_trabalhada, 2,",",".") . "</li>";
    echo "<li>Horas trabalhadas: " . number_format($hora_trabalhada) . "h</li>";
    echo "<li>Salário bruto: R$" . number_format($sal_bruto, 2, ",", ".") . "</li>";
    echo "<li>Desconto INSS ({$desc}%): R$" . number_format($val_desc, 2, ",", ".") . "</li>";
    echo "<li>Salário líquido: R$" . number_format($sal_liquido, 2, ",", ".") . "</li>";
    echo "</ul>";
    
} else {
    echo "Parâmetros ausentes na URL!";
}
