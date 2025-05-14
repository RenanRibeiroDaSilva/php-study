<?php
$usuario = [
        [    
            "nome" => "Renan",
            "idade" => 32
        ],
        [   
            "nome" => "João",
            "idade" => 23
        ],
        [
            "nome" => "Yan",
            "idade" => 18
        ]
    ];

    print_r($usuario);
    echo "<br><br>";
    var_dump($usuario);
    

    echo "<br><br>O segundo usuário é: " . $usuario[1]["nome"];
?>