<?php

namespace ScreenMatch\Calculos;
use ScreenMatch\Modelo\Avaliavel;
class ConversorDeNota{
    public function converte(Avaliavel $avaliavel): float{
        $nota = $avaliavel->media();
        // realiza a conversão
        return round($nota) / 2;
    }
}