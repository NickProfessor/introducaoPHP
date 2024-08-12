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

    $arrayQueImitaObjeto = criaPessoa("Nickollas", 18, "SJC");

    function criaPessoa(string $nome, int $idade, string $cidade){
        return [
            "nome" => $nome,
            "idade" => $idade,
            "cidade" => $cidade
        ];
    }
    file_put_contents("./pessoas.json", json_encode($arrayQueImitaObjeto));