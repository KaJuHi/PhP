<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pokedex </title>
</head>

<style>
    .card{
        width: 200px;
        height: 450px;
        border: solid 1px;
        position: relative;
        float: left;
        padding: 10px;
    }

    .card img{
        text-align: center;
        max-width: 100%;
    }
</style>

<body>
    <?php foreach ($pokemons as $poke) : ?>

    <div class="card">
        <img src="<?=$poke['imagem'] ?>" > 
        <p> Nome:  <?=$poke['nome'] ?> </p>
        <p> Altura: <?=$poke['altura'] ?> polegadas </p>
        <p> Peso: <?=$poke['peso'] ?> kg </p>
        <p> Habilidades: </p>
        
        <ul>
        <?php foreach ($poke['habilidades'] as $hab) : ?>
            <li> <?=$hab['ability']['name'] ?> </li>
        <?php endforeach; ?>
        </ul>
    </div>

    <?php endforeach; ?>
</body>
</html>