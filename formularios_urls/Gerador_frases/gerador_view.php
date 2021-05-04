<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gerador de fake news </title>
</head>

<style>
    h2{
        font-family: 'Courier New', Courier, monospace;
        font-size: 20px;
        padding: 10px;
    };
</style>

<body>
    <h2> Insira abaixo: </h2>
    
    <form method="GET" action="gerador.php">
        <label> Primeira letra(minúscula) do nome </label>
        <br>
        <input type="text" name="letra" >
        <br>
        <label> O número correspondente ao seu mês de nascimento </label>
        <br>
        <input type="text" name="mes" >
        <br>
        <label> O dia do seu aniversário </label>
        <br>
        <input type="text" name="dia">
        <br>
        <input type="submit">
    </form>

    <div class="frase">
        <h2> Sua fake news é: <?= $frase ?> </h2>
    </div>
</body>
</html>