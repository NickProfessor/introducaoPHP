<?php
    use ScreenMatch\Calculos\ConversorDeNota;
    use ScreenMatch\Modelo\Episodio;
    use ScreenMatch\Modelo\Genero;
    use ScreenMatch\Modelo\Serie;

    require "autoload.php";


    $serie = new Serie("Serie animada", 2005, Genero::Acao, 7, 20, 30);
    $episodio = new Episodio($serie, "Piloto", 1);

    $conversor = new ConversorDeNota();
    echo $conversor->converte($episodio);