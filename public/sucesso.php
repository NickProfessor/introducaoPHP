<?php $filme = json_decode(file_get_contents("filmes.json"), true)?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme cadastrado</title>
</head>

<body>
    <h1><?php echo $filme["nome"]?></h1>
    <h2><?php echo $filme["anoLancamento"]?></h2>
    <h2><?php echo $filme["genero"]?></h2>
</body>

</html>