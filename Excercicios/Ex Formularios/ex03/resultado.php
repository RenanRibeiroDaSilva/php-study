<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado ICM</title>
</head>
<body>
    <div>
        <?php
        if (isset($_GET['peso']) && isset($_GET['altura'])) {
            // Variávei:
            $peso = (float) $_GET['peso'];
            $altura = (float) $_GET['altura'];

            // Calculo:
            $imc = $peso / ($altura * $altura);

            echo "<h2>Seu IMC é " . number_format($imc, 2, ',', '.') . "</h2>";

            if ($imc < 18.5) {
                echo "Você está abaixo do peso.";
            } elseif ($imc < 25) {
                echo "Você está com o peso ideal.";
            } elseif ($imc < 30) {
                echo "Você está com sobrepeso.";
            } elseif ($imc < 35) {
                echo "Obesidade grau 1.";
            } elseif ($imc < 40) {
                echo "Obesidade grau 2.";
            } else {
                echo "Obesidade grau 3.";
            }
        } else {
            echo "Preencha todos os campos do formulário.";
        }
        ?>
    </div>
    <div>
        <a href="imc.html"><br><br>Voltar!</a>
    </div>
</body>
</html>