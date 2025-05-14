

<?php
/* Criando uma calculadora simples em PHP */ 

/* Usando GET_[] para pegar valores da URL */
$a = $_GET["a"];
$b = $_GET["b"];

# Exibindo valores recebidos
echo "<h2>Números recebido: $a e $b <br></h2>";
echo "Soma: " . ($a + $b) ."<br>";
echo "Média: " . (($a + $b) / 2) . "<br>";

?>
