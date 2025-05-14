<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos</title>
</head>
<body>
    <style>
        h2 {
            font: 15pt Arial;
            color:rgb(21, 14, 235);
            font-weight: bold;
        }
    </style>
    <div>
        <?php
            $n1 = $_GET["x"];
            $n2 = $_GET["y"];
            $s = $n1 + $n2;

            echo "<h2>Valores recebidos v1 = $n1 e v2 = $n2 </h2> <br>";
            echo "A soma entre $n1 e $n2 é igual a ". ($n1 + $n2) ."<br>";
            echo "A subtração entre $n1 e $n2 é igual a ". ($n1 - $n2) ."<br>";
            echo "A multiplicação entre $n1 e $n2 é igual a ". ($n1 * $n2) ."<br>";
            echo "A divisão entre $n1 e $n2 é igual a ". ($n1 / $n2). "<br>";
            echo "O módulo entre $n1 e $n2 é igual a ". ($n1 % $n2). "<br>";
            echo "<br><br>";
            echo "O valor absoluto de $n2 é ". abs($n2) ."<br>";
            echo "O valor de $n1<sup>$n2</sup> é ". pow($n1, $n2)."<br>";
            echo "A raiz de $n1 é ". sqrt($n1) ."<br>";
            echo "O valor de $n2 arredondado é ". round($n2). "<br>";
            echo "A parte inteira de $n2 é ". intval($n2). "<br>";
            echo "O valor de $n2 em reais é R$" . number_format($n2, 2, ',','.') . "<br>";

        ?>
    </div>
</body>
</html>