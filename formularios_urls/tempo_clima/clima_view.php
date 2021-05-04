<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Clima/Tempo </title>
</head>

<style>
    .tempo{
        max-width: 200px;
        max-height: 300px;
        border: solid 1px;
        position: relative;
        float: left;
        padding: 10px;
    };
</style>

<body>
    <p> Informe o nome de uma cidade: </p>

    <form method="get" action="clima.php">
        <input type="text" name="cidade">
        <input type="submit">
    </form>
    <br>
    <div class="tempo">
        <ul>
            <li> <p> Nome: <?= $nome ?> </p> </li>
            <li> <p> Temperatura: <?= $temperatura ?> </p> </li>
            <li> <p> Sensação térmica: <?= $sensacao ?> </p> </li>
            <li> <p> Umidade do ar: <?= $umidade ?> </p> </li>
            <li> <p> Velocidade do vento: <?= $velocidade ?> </p> </li>
        </ul>
    </div>

    <div class="tempo">
        <ul>
            <li> <p> Nome: <?= $nomefoz ?> </p> </li>
            <li> <p> Temperatura: <?= $temperaturafoz ?> </p> </li>
            <li> <p> Sensação térmica: <?= $sensacaofoz ?> </p> </li>
            <li> <p> Umidade do ar: <?= $umidadefoz ?> </p> </li>
            <li> <p> Velocidade do vento: <?= $velocidadefoz ?> </p> </li>
        </ul>
    </div>

    <div class="tempo">
        <ul>
            <li> <p> Nome: <?= $nomeara ?> </p> </li>
            <li> <p> Temperatura: <?= $temperaturaara ?> </p> </li>
            <li> <p> Sensação térmica: <?= $sensacaoara ?> </p> </li>
            <li> <p> Umidade do ar: <?= $umidadeara ?> </p> </li>
            <li> <p> Velocidade do vento: <?= $velocidadeara ?> </p> </li>
        </ul>
    </div>
</body>
</html>