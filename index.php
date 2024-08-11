<?php
    echo"Hello world!\n";

    $tipo = "MaB";

    $nota = match ($tipo) {
        "MB" => "Nota máxima",
        "B" => "Nota boa",
        "R" => "Nota Regular",
        "I" => "Nota baixa",
        default => "Nota inválida"
    };

    $arrayQueImitaObjeto = [
        "nome" => "nick",
        "idade" => 18,
        "cidade" => "são paulo"
    ];

    echo $arrayQueImitaObjeto["nome"];