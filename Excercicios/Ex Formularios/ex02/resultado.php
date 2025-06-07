<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <div>
        <?php
            // Variavel:
            $n1 = (float) $_GET["n1"];
            $n2 = (float) $_GET["n2"];

            // Calculo:
            $soma = $n1 + $n2;

            // Mostra para o usuário:
            echo "<h2>Resultado: $n1 + $n2 = $soma</h2>";
        ?>    
        <a href="calculadora.html">Voltar</a>
    </div>
</body>
</html>