<?php

namespace ScreenMatch\Calculos;
use Error;
use ScreenMatch\Modelo\Avaliavel;
class ConversorDeNota{
    public function converte(Avaliavel $avaliavel): float{
        try{
            $nota = $avaliavel->media();
        // realiza a conversão
        return round($nota) / 2;
    }catch(Error){
        return 0;
    }
    }
}