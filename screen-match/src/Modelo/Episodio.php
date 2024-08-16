<?php
namespace ScreenMatch\Modelo;
    class Episodio implements Avaliavel{
        
        use ComAvaliacao;
        public function __construct(
            public readonly Serie $serie,
            public readonly string $nomeDoEp,
            public readonly int $numeroDoEp,
        ){
            $this->notas = [];
        }

        
    }