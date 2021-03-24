<?php
    $mes = [
        "A escolha ", "O plano ", "Como eu era antes ", "A viagem ", "O passado ",
        "O desejo ", "A história ", "O natal ","O resgate ","No ritmo ","O diário ","O reino "
    ];

    $letra = [
    "de todos os crushes que não peguei","do fora que levei","dos nudes que recebi",
    "de alguém especial","da vacina","de um match especial","de um date perfeito", 
    "da carentena","da/o minha/meu melhor amiga/o","de ser solteira/o","do meu eterno talvez",
    "das selfies que voce não curtiu","de um casamento","dos episódios que eu vi sem ninguém", 
    "de um casamento ás cegas","de brincar com fogo","do início de um sonho",
    "do meu período fértil","de uma ilusão","de uma indireta da @","do meu pai",
    "de um amorzinho","dos stories não vizualizados","das msgs depois das 2 da manhã",
    "de um cursiho de EAD","de um amor e mil casamentos",
];

    $randmes = rand(0, 11);
    $randletra = rand(0, 25);

    echo "<html>
        <head>
            <title> Gerador de frases </title>
            <style>
            body{
                background-color: rgb(123, 214, 218);
            }

            h1{
                font-family: 'Courier New', Courier, monospace;
                text-align: center;
                font-size: 70px;
            }

            h2{
                font-family: 'Courier New', Courier, monospace;
                font-size: 40px;
                text-align: center;
            }
            table{
                background-color: rgb(86, 175, 197);
                width: 100%;
                height: 100%;
            }
        </style>
        </head>
        
        <body>
        <table>
        <th>
            <td>
                <h1> Se você fosse um filme, qual seria o título? </h1>
                <br>
                <h2> '";

        for ($i=0; $i < 12; $i++) { 
            if ($i == $randmes) {
                echo $mes[$i];
            }
        }
            
        for ($i=0; $i < 26; $i++) { 
            if ($i == $randletra) {
                echo $letra[$i]."'</h2>";
            }
        }
    
    echo"
    </td>
        </th>
    </table>
    </body>";